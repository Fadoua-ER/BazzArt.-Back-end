<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\ClientComment;
use App\Models\Cart;
use App\Models\Client;
use App\Models\Transaction;

class ClientController extends Controller
{
    //Authentification functions
    public function register(Request $request)
    {
        $request->validate([
            'client_firstname' => 'required|string',
            'client_lastname' => 'required|string',
            'client_email' => 'required|email|unique:clients,client_email',
            'client_password' => 'required|string|min:6|confirmed',
        ]);

        $client = Client::create([
            'client_firstname' => $request->client_firstname,
            'client_lastname' => $request->client_lastname,
            'client_email' => $request->client_email,
            'client_password' =>  Hash::make($request->client_password),
            'api_token' => Str::random(60)
        ]);

        return response()->json(['client' => $client], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('client_email', 'client_password');

        $client = Client::where('client_email', $credentials['client_email'])->first();

        if ($client && Hash::check($credentials['client_password'], $client->client_password)) {
            $token = Str::random(60);
            $client->api_token = $token;
            $client->save();

            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized', $token, $client], 401);
        }
    }

    public function index(Request $request)
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json(['error' => 'Token not provided', $token], 401);
        }

        $token = str_replace('Bearer ', '', $token);
        $client = Client::where('api_token', $token)->first();

        if ($client) {
            return response()->json($client);
        } else {
            return response()->json(['error' => 'Unauthorized', $client], 401);
        }
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
