<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Cart as Cart;
use Validator;
use App\Products;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        return back();
        $getMenuItems = Products::getMenuItems();
        //echo '<pre>';print_r(Cart::content());die;
        return view('cart', compact('getMenuItems'));
    }

    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('Item is already in your cart!');
        }
        
        Cart::add([
            'id'         => $request->id,
            'name'       => $request->name,
            'qty'   => 1,
            'price'      => $request->price,
            'options' => [
                'color' => 'Red',
                'size' => $request->p_size,
                'Image' => $request->image,

            ],
        ]);
       // Cart::add($request->id, $request->name, 1, $request->price,['size' => $request->p_size], ['color' => 'red'])->associate('App\Product');
        return redirect('cart')->withSuccessMessage('Item was added to your cart!');
    }

    public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

         if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
         }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');

        return response()->json(['success' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('cart')->withSuccessMessage('Item has been removed!');
    }

    /**
     * Remove the resource from storage.
     */
    public function emptyCart()
    {
        Cart::destroy();
        return redirect('cart')->withSuccessMessage('Your cart has been cleared!');
    }

    /**
     * Switch item from shopping cart to wishlist.
     *
     * @param  int  $id
     */
    public function switchToWishlist($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('Item is already in your Wishlist!');
        }

        Cart::instance('wishlist')->add($item->id, $item->name, 1, $item->price)
                                  ->associate('App\Product');

        return redirect('cart')->withSuccessMessage('Item has been moved to your Wishlist!');

    }
    
    
    public function checkout(Request $request)
    {
        $getMenuItems = Products::getMenuItems();
        //echo '<pre>';print_r(Cart::content());die;
        return view('checkout', compact('getMenuItems'));
    }
}
