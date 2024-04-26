<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientComment;
use App\Models\Cart;
use App\Models\Client;
use App\Models\Transaction;

class ClientController extends Controller
{
    //Authentification functions
    public function client_registration(Request $request)
    {
        $password = bcrypt($request->input('client_password')); // Hash the password
        $request->merge(['client_password' => $password]); // Replace the plain text password with the hashed one
        Client::create($request->all()); // Create the administrator with the hashed password
        return response()->json("The client is added successfully !", 200);
    }
    public function client_login(){

    }
    public function client(){

    }
    public function client_logout(){

    }
    //CRUD operations on Client message
    public function create_client_message()
    {
        ClientComment::create($request->all());
        return response()->json("The comment is added successfully !",200);
    }
    //function read is in the AdministrationController
    public function update_client_message(Request $request, $id)
    {
        $clients_messages =Cart::find($id);
        $clients_messages->update($request->all());
        return response()->json(['message'=>'Client`s message modified successfully','modified_item'=>$clients_messages],200);
    }
    //function delete is in the AdministrationController
    //CRUD operations on Order(Transactions)
    public function create_order(Request $request)
    {
        Transaction::create($request->all());
        return response()->json("The artwork is added successfully to ypur cart !",200);
    }
    public function read_order()
    {

    }
    public function update_order()
    {

    }
    public function delete_order()
    {

    }
    //CRUD operations on Cart of orders
    public function show_cart(string $id)
    {
        $cart= Cart::findorFail($id);
        return $cart;
    }
    public function create_cart(Request $request)
    {
        Cart::create($request->all());
        return response()->json("The cart is added successfully !",200);
    }
    public function read_carts()
    {
        $carts = Cart::all();
        return $carts;
    }
    public function update_cart(Request $request, $id)
    {
        $carts =Cart::find($id);
        $carts->update($request->all());
        return response()->json(['message'=>'Cart modified successfully','modified_item'=>$carts],200);
    }
    public function delete_cart(string $id)
    {
        $resultats=Cart::destroy($id);
        if($resultats>0)
        {
            return response()->json("The cart $id is deleted",200);
        }
        else
        {
            return response()->json("Error the cart $id was not deleted !",400);
        }
    }
}
