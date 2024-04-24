<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\Profil;

class ProfilController extends Controller
{
    //Authentification functions
    public function artist_registration(){

    }
    public function artist_login(){

    }
    public function artist(){

    }
    public function artist_logout(){

    }
    //CRUD operations on Profil
    //read,update and delete are in the AdministrationController
    //CRUD operations on the artworks
    public function create_artwork()
    {
        Artwork::create($request->all());
        return response()->json("The artwork is added successfully !",200);
    }
    //read and delete are in the AdministrationController
    public function update_artwork()
    {

    }
    //CRUD operations on Clients Messages
    //They are in the AdministrationController
    //CRUD operations on Orders
    //read, update are in the ClientController
}
