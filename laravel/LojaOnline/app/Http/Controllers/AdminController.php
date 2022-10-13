<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)
    {
        $data=new product;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage', $imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->des;

        $data->quantity=$request->quantity;


        $data->save();

        return redirect()->back()->with('message','Produto adicionado!');

    }

    public function showproduct()
    {
        $data=product::all();

        return view('admin.showproduct', compact('data'));
    }

    public function deleteproduct($id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateproduct($id)
    {
        $data=product::find($id);
        return view('admin.updateproduct', compact('data'));
    }
    public function updateform(Request $request, $id)
    {
        $data=product::find($id);

        
        $image=$request->file;

        if($image){

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage', $imagename);

        $data->image=$imagename;

        }

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->des;

        $data->quantity=$request->quantity;


        $data->save();

        return redirect()->back()->with('message','Produto Atualizado!');

    }
    
}
