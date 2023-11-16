<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','address','token','customer_id'];
    public $appends = ['total'];
    

    public function details(){
        return $this->hasMany(Order_detail::class , 'order_id' ,'id');
    }

    public function getTotalAttribute(){
        $t = 0;
        foreach ($this->details as $dt){
            $t += $dt->price * $dt->quantity;
        }
        return $t;
    }
}
