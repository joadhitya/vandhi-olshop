<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Process\AddToCart;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
    
    
    private function addProduct($pid,$qty){
        $_SESSION['cart'][$pid]['qty']=$qty;
    }

    private function updateProduct($pid,$qty){
        if(isset($_SESSION['cart'][$pid])){
            $_SESSION['cart'][$pid]['qty'] = $qty;                
        }
    }

    private function removeProduct($pid){            
        if(isset($_SESSION['cart'][$pid])){
            unset($_SESSION['cart'][$pid]);            
        }
    }

    private function emptyProduct(){
        unset($_SESSION['cart']);
    }

    private function totalProduct(){
        if(isset($_SESSION['cart'])){
            return count($_SESSION['cart']);      
        }
        else{
            return 0;
        }
    }

    public function manage_cart(Request $request)
    {
        session_start();
        $pid = $_POST['pid'];  

        $qty = $_POST['qty'];        

        if($qty == '1'){
            $qty =1;
        }
        $type = $_POST['type'];

        if($type=='add'){
            $this->addProduct($pid,$qty);
        }
        
        if($type=='update'){
            $this->updateProduct($pid,$qty);
        }
        
        if($type=='remove'){
            $this->removeProduct($pid,$qty);
        }

        echo $this->totalProduct();
    }

    public function cart(){
        session_start();
        return view('cart');
    }

    public function checkout(){
        session_start();
        return view('checkout');
    }
}
