<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class Categorycontroller extends Controller
{
    public function index(){
        $cat = Category::orderBy('id')->paginate(5);
        
        return view('category.index',compact('cat'));
    }
    public function create(){
        return view('category.create');
      }
      public function store(request $req){
        $req->validate([
            'name' => 'required|unique:categories'
        ],
        [
            'name.required' => 'khong duoc de trong',
            'name.unique' => 'Danh muc da ton tai',
        ]
    
    );
    
        $form = $req->only('name');
        Category::create($form);
    
        return redirect()->route('category.index');
      }


      public function edit(Category $category){
        return view('category.edit',compact('category'));
      }
      public function update(request $req , Category $category){
        $req->validate([
          'name' => 'required|unique:categories'
      ],
      [
          'name.required' => 'khong duoc de trong',
          'name.unique' => 'Danh muc da ton tai',
      ]
      );
      
        $form = $req->only('name');
        $category->update($form);
    
     
        return redirect()->route('category.index');
      }
    


      //xoa category
    public function destroy(Category $category){
        if(Product::where('category_id',$category->id)->count() == 0){
          $category->delete();
          return redirect()->route('category.index');
        }
          return abort(403);
      }
}
