<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class Productcontroller extends Controller
{
    public function index(){
        $pro = Product::orderBy('id')->paginate(4);
        return view('product.index',compact('pro'));
    }

    //them moi product
    public function create(){
      $cats = Category::all();
      return view('product.create',compact('cats' ));
    }
    public function store(request $req){
      $req->validate([
          'name' => 'required|unique:products',
          'price' => 'numeric|min:20000',
          'sale_price' =>'numeric|min:0|lte:price',
          'image' => 'file|mimes:jpg,png,web,gif',
          'category_id' => 'required|exists:categories,id',
      ],
      [
          'name.required' => 'khong duoc de trong',
          'name.unique' => 'Danh muc da ton tai',
          'price.numeric'=>'phải nhập giá vô',
          'sale_price.numeric'=>'phải nhập giá vô',
      ]
  
  );
      $image = time().'-'.$req->image->getClientOriginalName();
      $path = public_path('upload');
      $req->image->move($path,$image);
      $form = $req->only('name','price','sale_price','description','category_id');
      $form['image'] = $image;
      if( Product::create($form)){
        return redirect()->route('product.index');
      }
      
      return redirect()->back();
  
      
    }


    //xoa product
    public function destroy(Product $Product){
        if(Product::where('category_id',$Product)->count() == 0){
          $Product->delete();
          return redirect()->route('product.index');
        }
          return abort(403);
      }


      public function edit(Product $product){
        $cats = Category::all();
        return view('product.edit',compact('cats','product'));
      }
     
      public function update(request $req , $id){
      //   $req->validate([
      //     'name' => 'required|unique:products'
      // ],
      // [
      //     'name.required' => 'khong duoc de trong',
      //     'name.unique' => 'Danh muc da ton tai',
      // ]
      // );
        $product = Product::find($id);
        if($product) {
          $product->name = $req->name;
          $product->price = $req->price;
          $product->sale_price = $req->sale_price;
          $product->description = $req->description;
          $product->category_id = $req->category_id;

          if(Product::where($product->id)){
            if($req->hasFile('file')){
              $file = time().'.'.$req->file->extension();
              $req->file->move(public_path('upload'), $file);
              $product->image = $file;
              
            }
          }
          $product->save();
        }
    
     
        return redirect()->route('product.index');
      }
}
