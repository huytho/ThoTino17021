<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','description','image','sale_price','category_id'];

    public function cat()  {
        return $this->hasOne(Category::class,'id','category_id');
        
    }
    
    public function scopeTim($query) {
        $name = request('name');
        $category_id = request('category_id');

        if($name){
            $query = $query->where('name','LIKE','%'.$name.'%');
     
        }if($category_id){
            $query = $query->where('category_id',$category_id);
     
        }
        return $query->orderBy('id', 'DESC');
     
    }

   
}
