<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\Profil;

class ProfilController extends Controller
{
    //Authentification functions
    public function artist_registration(Request $request){
        $password = bcrypt($request->input('artist_password')); // Hash the password
        $request->merge(['artist_password' => $password]); // Replace the plain text password with the hashed one
        Profil::create($request->all()); // Create the administrator with the hashed password
        return response()->json("The artist is registerd successfully !", 200);
    }
    public function artist_login(Request $request){

    }
    public function artist(){

    }
    public function artist_logout(){

    }
    //CRUD operations on Profil
    //read,update and delete are in the AdministrationController
    //CRUD operations on the artworks
    public function create_artwork(Request $request)
    {
        Artwork::create($request->all());
        return response()->json("The artwork is added successfully !",200);
    }
    //read and delete are in the AdministrationController
    public function update_artwork(Request $request, $id)
    {
        $artworks = Artwork::find($id);
        $artworks->update($request->all());
        return response()->json(['message'=>'Artwork updated successfully','modification'=>$artworks],200);
    }
    //CRUD operations on Clients Messages
    //They are in the AdministrationController
    //CRUD operations on Orders
    //read, update are in the ClientController
}
