<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function index (){
        return view ('home');
    }

    public function add_product (Request $request){
        
        $request->validate([
            'title'=> 'required | min:6 | unique:products',
            'description'=> 'required | max : 30',
            'image' =>'required | image | mimes :jpg,png,jpeg| max:2048'
        ],
        [
            'title.required' => 'title is required bla bla bla',
            'title.min'=> 'title harus lebih dari 6',
            'description.required' => 'description is required bla bla bla'
        ]

    );
        $data = new Product ;

        $data -> title = $request->title;
        $data -> description = $request->description;
        $image = $request->image;

        if($image){
            $imageName= time().'LaraCrud.'.$image->getClientOriginalExtension();
            $image->move('product',$imageName);
            
            $data->image = $imageName;
        }
      
        $data->save();

        return redirect()->back();
    }

    public function show_product(){

        $data = Product::all();


        return view('product',compact('data'));
    }
 
    public function delete_product($id){
        $data = Product::find($id);
        $data->delete();
        
        return redirect()->back();
    }

    public function update_product($id){
        $product = Product::find($id);

        return view('update_product',compact('product'));

    }
    public function edit_product($id, Request $request){
        $data = Product::find($id);

        $data -> title = $request->title;
        $data -> description = $request->description;
        $image = $request->image;

        if($image){
            $imageName= time().'LaraCrud.'.$image->getClientOriginalExtension();
            $image->move('product',$imageName);
            
            $data->image = $imageName;
        }
      
        $data->save();

        return redirect()->back();

    }
}
