<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    function index() {

        $total = $this->totalPrice();

        return view('front.checkout.checkout',compact('total'));
    }

    function addOrder(Request $request) {
        // Thêm đơn hàng
        $order = Order::create($request->all());


        // Thêm chi tiết đơn hàng
        $carts = Cart::where('user_id',Auth::id())->get();

        foreach ($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'total' => $cart->price ,
            ];
            OrderDetail::create($data);
        }

        // Gửi mail
        $total = $this->totalPrice();
        $subtotal = $this->totalPrice();

        $this->sendEmail($order, $total, $subtotal);


        // Xóa giỏ hàng
        Cart::where('user_id',Auth::id())->delete();

        return redirect('checkout/complete')->with('notification','Success! You will pay on delivery. Please check your email');
    }

    function complete() {
        $noti = session('notification');
        return view('front.checkout.completed',compact('noti'));
    }

    private function sendEmail($order, $total, $subtotal) {
        $email_to = $order->email;

        Mail::send('front.checkout.email', compact('order','total','subtotal'),
            function ($message) use ($email_to){
                $message->from('AutionOnline@gmail.com', 'Auction');
                $message->to($email_to,$email_to);
                $message->subject('Order Notification');
            }
        );
    }

    function totalPrice() {
        $total = 0;
        if (Auth::check()) {
            $carts = Cart::where('user_id',Auth::id())->get();
            foreach ($carts as $cart) {
                $total += $cart->price;
            }
        }
        return $total;
    }

}
