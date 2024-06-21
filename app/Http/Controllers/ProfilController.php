<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Artwork;
use App\Models\Profil;

class ProfilController extends Controller
{
    //Authentification functions
    public function register(Request $request)
    {
        $request->validate([
            'artist_firstname' => 'required|string',
            'artist_lastname' => 'required|string',
            'artist_username' => 'required|string|unique:profils,artist_username',
            'artist_birthday' => 'required|date',
            'artist_email' => 'required|email|unique:profils,artist_email',
            'current_country' => 'required|exists:countries,country_id',
            'artist_phone_number' => 'required',
            'artist_password' => 'required|string|min:6|confirmed',
        ]);

        $profil = Profil::create([
            'artist_firstname' => $request->artist_firstname,
            'artist_lastname' => $request->artist_lastname,
            'artist_username' => $request->artist_username,
            'artist_birthday' => $request->artist_birthday,
            'artist_email' => $request->artist_email,
            'current_country' => $request->current_country,
            'artist_phone_number' => $request->artist_phone_number,
            'artist_password' =>  Hash::make($request->artist_password),
            'api_token' => Str::random(60)
        ]);

        return response()->json(['profil' => $profil], 201);
    }


    public function login(Request $request)
    {
        $credentials = $request->only('artist_username', 'artist_password');

        $profil = Profil::where('artist_username', $credentials['artist_username'])->first();

        if ($profil && Hash::check($credentials['artist_password'], $profil->artist_password)) {
            $token = Str::random(60);
            $profil->api_token = $token;
            $profil->save();

            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized', $token, $profil], 401);
        }
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('artist_username', 'artist_password');

    //     $profil = Profil::where('artist_username', $credentials['artist_username'])
    //     ->where('artist_password', Hash::make($credentials['artist_password']))->first();

    //     if ( $profil) {
    //         $token = Str::random(60);
    //         $profil->api_token = $token;
    //         $profil->save();

    //         return response()->json(['token' => $token], 200);
    //     } else {
    //         return response()->json(['error' => 'Unauthorized a',  Hash::make($credentials['artist_password'])], 401);
    //     }
    // }

    public function update(Request $request)
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json(['error' => 'Token not provided'], 401);
        }

        $token = str_replace('Bearer ', '', $token);
        $profil = Profil::where('api_token', $token)->first();

        if (!$profil) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $validator = Validator::make($request->all(), [
            'artist_firstname' => 'sometimes|required|string',
            'artist_lastname' => 'sometimes|required|string',
            'artist_username' => 'sometimes|required|string|unique:profils,artist_username,' . $profil->id,
            'artist_birthday' => 'sometimes|required|date',
            'artist_email' => 'sometimes|required|email|unique:profils,artist_email,' . $profil->id,
            'biography' => 'sometimes|nullable',
            'artist_picture' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'current_country' => 'sometimes|required|exists:countries,country_id',
            'artist_phone_number' => 'sometimes|required',
            'artist_password' => 'sometimes|required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $profil->update($request->only([
            'artist_firstname',
            'artist_lastname',
            'artist_username',
            'artist_birthday',
            'artist_email',
            'current_country',
            'artist_phone_number',
        ]));

        if ($request->filled('artist_password')) {
            $profil->artist_password = Hash::make($request->artist_password);
            $profil->save();
        }

        return response()->json(['profil' => $profil], 200);
    }

    public function index(Request $request)
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json(['error' => 'Token not provided', $token], 401);
        }

        $token = str_replace('Bearer ', '', $token);
        $profil = Profil::where('api_token', $token)->first();

        if ($profil) {
            return response()->json($profil);
        } else {
            return response()->json(['error' => 'Unauthorized', $profil], 401);
        }
    }

    public function modifyPassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:6',
            'confirm_password' => 'required|string|same:new_password',
        ]);

        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json(['error' => 'Token not provided'], 401);
        }

        $token = str_replace('Bearer ', '', $token);
        $profil = Profil::where('api_token', $token)->first();

        if (!$profil) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        if (!Hash::check($request->old_password, $profil->artist_password)) {
            return response()->json(['error' => 'Invalid old password'], 400);
        }

        $profil->update([
            'artist_password' => Hash::make($request->new_password),
        ]);

        return response()->json(['message' => 'Password updated successfully'], 200);
    }

    // public function deleteAccount(Request $request)
    // {
    //     $token = $request->header('Authorization');

    //     if (!$token) {
    //         return response()->json(['error' => 'Token not provided'], 401);
    //     }

    //     $token = str_replace('Bearer ', '', $token);
    //     $profil = Profil::where('api_token', $token)->first();

    //     if (!$profil) {
    //         return response()->json(['error' => 'Unauthorized'], 401);
    //     }

    //     $profil->delete();

    //     return response()->json(['message' => 'Account deleted successfully'], 200);
    // }

    public function deleteAccount(Request $request)
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json(['error' => 'Token not provided'], 401);
        }

        $token = str_replace('Bearer ', '', $token);
        $profil = Profil::where('api_token', $token)->first();

        if (!$profil) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $deletePassword = $request->input('password');

        if (!Hash::check($deletePassword, $profil->artist_password)) {
            return response()->json(['error' => 'Incorrect password'], 401);
        }

        $profil->delete();

        return response()->json(['message' => 'Account deleted successfully'], 200);
    }

    //CRUD operations on Profil
    //read,update and delete are in the AdministrationController
    //CRUD operations on the artworks
    // public function create_artwork(Request $request)
    // {
    //     Artwork::create($request->all());
    //     return response()->json("The artwork is added successfully !",200);
    // }

    public function create_artwork(Request $request)
    {
        $data = $request->validate([
            'artwork_code' => 'required|string',
            'artwork_name' => 'required|string',
            'artwork_description' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'creation_date' => 'required|date',
            'price' => 'required|integer',
            'owner' => 'required|exists:profils,id',
            'category' => 'required|exists:categories,category_id',
            'location_country' => 'required|exists:countries,country_id',
            'location_city' => 'required|exists:cities,city_id',
            'artwork_status' => 'required|exists:statuses,status_id',
        ]);

        if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->store('artworks', 'public');
            $data['picture'] = $imagePath;
        }

        Artwork::create($data);

        return response()->json("The artwork is added successfully!", 200);
    }

    public function profil_artworks(Request $request)
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json(['error' => 'Token not provided'], 401);
        }

        $token = str_replace('Bearer ', '', $token);
        $profil = Profil::where('api_token', $token)->first();

        if (!$profil) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $artworks = Artwork::where('owner', $profil->id)->get();

        return response()->json($artworks);
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
