<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Cart;

use App\Models\Product;


class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if ($usertype =='1')
        {
            return view('admin.home');
        }
        else
        {
            $data = Product::paginate(3);

            return view('user.home', compact('data'));
        }
    }

    public function index()
    {
        
        if(Auth::id())
        {
            return redirect('redirect');
        }

        else

        {

            $data = Product::paginate(3);

            return view('user.home', compact('data'));
        }
    }

    public function allproducts()
    {   
        $data = Product::paginate(6);

        return view('user.allproducts', compact('data'));
    }

    public function search(Request $request)
    {
        $search=$request->search;

        if($search=='')
        {
            $data = Product::paginate(6);

            return view('user.allproducts', compact('data'));
        }

        $data=Product::where('title', 'like', '%' .$search. '%')->get();

        return view('user.allproducts', compact('data'));
    }

    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=Auth()->user();

            $product=Product::find($id);

            $cart=new Cart;
            

            $cart->name=$user->name;

            $cart->phone=$user->phone;

            $cart->adress=$user->adress;

            $cart->product_title=$product->title;
            
            $cart->price=$product->price;

            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect()->back()->with('message','Produto Adicionado ao Carrinho!');
        }
        else
        {
            return redirect('login');
        }
    }
}
