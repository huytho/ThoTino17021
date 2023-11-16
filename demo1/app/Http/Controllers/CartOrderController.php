<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Common\CartHelp;
use App\Mail\OrderEmail;
use Auth;
use Mail;

use App\Models\Order;
use App\Models\Order_detail;

class CartOrderController extends Controller
{
  
   public function checkout( CartHelp $cart)  {
      $auth = auth('cus')->user();
      return view('cart.checkout',compact('auth','cart'));
      
  }
public function post_checkout(Request $req, CartHelp $cart)  {
    $auth = auth('cus')->user();
    $checkSv = true;
        $form_data = $req->only('name','email','phone','address');
        $form_data  ['token'] = \Str::Random(40);
        $form_data['customer_id'] = auth('cus')->id();
    if($order = Order::create($form_data)) {
        foreach($cart->tem as $items) {
            $detail = [
                'order_id' => $order->id,
                'product_id' => $items->id,
                'price' => $items->price,
                'quantity' => $items->quantity
            ];

            if(!Order_detail::create($detail)){
                $checkSv = false;
                break;
            }
        }
        if($checkSv){
        $emailto = $auth->email;
            Mail::to($emailto)->send(new OrderEmail($order,$auth));
            $cart->clear();
         
   
            return redirect()->route('order.checkout')->with('ok','Đặt hàng thành công kiểm tra email');

        }else{
            Order_detail::where('order_id', $order->id)->delete();
            $order->delete();
            return redirect()->back()->with('no',' đặt hàng ko thành công');

        }
}

      return view('cart.checkout',compact('auth','cart'));
      
  }
  public function detail(Order $order)  {
      return view('cart.detail', compact('order'));
      
  }
  public function myOrder()  {
      return view('cart.myOrder');
      
  }
  public function verify ($token)  {
    $order = Order::where('token' , $token)->firstOrFail();
    $order->update(['status' => 1,'token'=> null]);
    return redirect()->route('cart.view')->with('ok',' Xác nhận đơn hàng thành công ');
    
    
}


}