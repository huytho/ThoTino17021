<?php
namespace App\Common;
class CartHelp {
  
    public $tem = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;



    public function __construct() {
        $this->tem = session('cart') ? session('cart') : [];
        $this->totalQuantity =  $this-> totalQuantity();
        $this->totalPrice =  $this-> totalPrice() ;


    }
    public function add($product , $quantity){
        if(isset($this->tem[$product->id])){
        $this->tem[$product->id]->quantity +=1;

        }else{
        $item = (object)[
            'id' => $product-> id,
            'name' => $product-> name,
            'price' => $product-> sale_price ? $product-> sale_price : $product-> price,
            'image' => $product-> image,
            'quantity' => $quantity,   
        ];
        $this->tem[$product->id] = $item;
    }
        session(['cart' =>  $this->tem]);
    }

    public function remove($product){
        if(isset($this->tem[$product->id])){
        unset($this->tem[$product->id]);
        session(['cart' =>  $this->tem]);
    }
    }
        
        public function update($product , $quantity){
            if(isset($this->tem[$product->id])){
            $this->tem[$product->id]->quantity = $quantity ;;
            session(['cart' =>  $this->tem]);
        }
    }
    public function clear(){
         session(['cart' => null]);
    
    }
    private function totalQuantity() {
        $total = 0;
        foreach($this->tem as $tems ){
            $total += $tems->quantity;

        }
        return $total;
    }
    private function totalPrice() {
        $total = 0;
        foreach($this->tem as $tems ){
            $total += $tems->quantity * $tems->price;

        }
        return $total;
    }
}