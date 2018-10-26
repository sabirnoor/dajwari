<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Cart as Cart;
use Validator;
use App\Products;
use Session;
use App\Account;
use DB;

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
                'Kameezsize' => $request->Kameezsize,
                'Height' => $request->Height,
                'color' => $request->color,
                'size' => $request->p_size,
                'Image' => $request->image,
                'stitching_sizes' => $request->stitching_sizes,

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
        if(sizeof(Cart::content()) > 0){
            $getMenuItems = Products::getMenuItems();
            $Delivery = '';
            if(Session::get('user')){
                $Delivery = Account::getAddress(Session::get('user')->id);
                //echo '<pre>';print_r($Delivery);die;
            }
           // if(Session::get('user')){$request->session()->forget('user'); return redirect('cart')->withSuccessMessage('Item has been moved to your Wishlist!');}
            //$session = $request->session()->get('user');
            //echo '<pre>';print_r($Delivery);die;
            return view('checkout', compact('getMenuItems','Delivery'));
        }else{
           return redirect('/'); 
        }
    }
    
    public function changeUser(Request $request){
        if(Session::get('user')){$request->session()->forget('user'); return redirect('checkout');}
    }
    
    public function orderPlace(Request $request) {
         $post = $request->all();
         $order_id_track = 'ORD'.date('dmyhis').'00'.Session::get('user')->id;
         $data = array(
             'order_id' => $order_id_track,
             'user_id' => Session::get('user')->id,
             'qty' => Cart::instance('default')->count(false),
             'total_price' => str_replace(',','',Cart::instance('default')->subtotal()),
             'payment_mode' => $request->paymenttype,
             'order_status' => 'Processing',
             'use_coupon' => 0,
             'created' => date('Y-m-d h:i:s'),
             'modified' => date('Y-m-d h:i:s'),
         );
         $order_id = DB::table('dajwari_orders')->insertGetId($data);
         if(sizeof(Cart::content()) > 0){
            foreach (Cart::content() as $item){
                //echo '<pre>';print_r($item);
                $dataDetails = array(
                    'order_id' => $order_id,
                    'p_id' => $item->id,
                    'p_qty' => $item->qty,
                    'p_total' => $item->price,
                    'p_name' => $item->name,
                    'p_color' => $item->options->color,
                    'p_kameez_size' => $item->options->size,
                    'p_bust_size' => $item->options->size,
                    'p_code' => '1234',
                    'images' => $item->options->Image,
                    'created' => date('Y-m-d h:i:s'),
                    'modified' => date('Y-m-d h:i:s'),
                );
                DB::table('dajwari_order_details')->insert($dataDetails);
            }
         }
         Cart::destroy();
         return redirect('orderresponse/'.$order_id_track);
         //echo Cart::instance('default')->subtotal();
         //echo '<pre>';print_r($data);die('dd');
    }
    
    public function orderresponse($request){
        echo '<pre>';print_r($request);die('dd');
    }
    
}
