<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Administrator;
use App\Models\Profil;
use App\Models\Client;
use App\Models\Visitor;
use App\Models\Artwork;
use App\Models\AdminRole;
use App\Models\AdminMessageType;
use App\Models\AdministrationMessage;
use App\Models\BlogPost;
use App\Models\Cart;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Continent;
use App\Models\Country;
use App\Models\City;
use App\Models\ClientComment;
use App\Models\Transaction;
use App\Models\Status;
use App\Models\AdminChatMessage;
use App\Models\AdminNote;
use App\Models\Payment;

class AdministrationController extends Controller
{
    //Authentification functions
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $admin = Administrator::where('email', $credentials['email'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            $token = Str::random(60);
            $admin->api_token = $token;
            $admin->save();

            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function index(Request $request)
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json(['error' => 'Token not provided'], 401);
        }

        $token = str_replace('Bearer ', '', $token);
        $admin = Administrator::where('api_token', $token)->first();

        if ($admin) {
            return response()->json($admin);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    //CRUD operations on Continents
    public function show_continent(string $id)
    {
        $continent = Continent::findorFail($id);
        return $continent;
    }
    public function create_continent(Request $request)
    {
        Continent::create($request->all());
        return response()->json("The continent is added successfully !",200);
    }
    public function read_continents()
    {
        $continentslist = Continent::all();
        return $continentslist;
    }
    public function update_continent(Request $request, $id)
    {
        $continents = Continent::find($id);
        $continents->update($request->all());
        return response()->json(['message'=>'Continent updated successfully','modification'=>$continents],200);
    }
    public function delete_continent(string $id)
    {
        $resultats=Continent::destroy($id);
        if($resultats>0)
        {
            return response()->json("The continent $id is deleted",200);
        }
        else
        {
            return response()->json("Error the continent $id was not deleted !",400);
        }
    }
    //CRUD operations on Countries
    public function show_country(string $id)
    {
        $country= Country::findorFail($id);
        return $country;
    }
    public function create_country(Request $request)
    {
        Country::create($request->all());
        return response()->json("The country is added successfully !",200);
    }
    public function read_countries()
    {
        $countrieslist = Country::all();
        return $countrieslist;
    }
    public function update_country(Request $request, $id)
    {
        $countries = Country::find($id);
        $countries->update($request->all());
        return response()->json(['message'=>'Country updated successfully','modification'=>$countries]);
    }
    public function delete_country(string $id)
    {
        $resultats=Country::destroy($id);
        if($resultats>0)
        {
            return response()->json("The country $id is deleted",200);
        }
        else
        {
            return response()->json("Error the country $id was not deleted !",400);
        }
    }
    //CRUD operations on Cities
    public function show_city(string $id)
    {
        $city= City::findorFail($id);
        return $city;
    }
    public function create_city(Request $request)
    {
        City::create($request->all());
        return response()->json("The city is added successfully !",200);
    }
    public function read_cities()
    {
        $citieslist = City::all();
        return $citieslist;
    }
    public function update_city(Request $request, $id)
    {
        $cities = City::find($id);
        $cities->update($request->all());
        return response()->json(['message'=>'City updated successfully','modification'=>$cities],200);
    }
    public function delete_city(string $id)
    {
        $resultats=City::destroy($id);
        if($resultats>0)
        {
            return response()->json("The city $id is deleted",200);
        }
        else
        {
            return response()->json("Error the city $id was not deleted !",400);
        }
    }
    //CRUD operations on Categories
    public function show_category(string $id)
    {
        $category= Category::findorFail($id);
        return $category;
    }
    public function create_category(Request $request)
    {
        Category::create($request->all());
        return response()->json("The category is added successfully !",200);
    }
    public function read_categories()
    {
        $categorieslist = Category::all();
        return $categorieslist;
    }
    public function update_category(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->update($request->all());
        return response()->json(['message'=>'Category updated successfully','modification'=>$categories],200);
    }
    public function delete_category(string $id)
    {
        $resultats=Category::destroy($id);
        if($resultats>0)
        {
            return response()->json("The category $id is deleted",200);
        }
        else
        {
            return response()->json("Error the category $id was not deleted !",400);
        }
    }
    //CRUD operations on Subcategories
    public function show_subcategory(string $id)
    {
        $subcategory= SubCategory::findorFail($id);
        return $subcategory;
    }
    public function create_subcategory(Request $request)
    {
        SubCategory::create($request->all());
        return response()->json("The subcategory is added successfully !",200);
    }
    public function read_subcategories()
    {
        $subcategorieslist = SubCategory::all();
        return $subcategorieslist;
    }
    public function update_subcategory(Request $request, $id)
    {
        $subcategories = SubCategory::find($id);
        $subcategories->update($request->all());
        return response()->json(['message'=>'Subcategory updated successfully','modification'=>$subcategories],200);
    }
    public function delete_subcategory(string $id)
    {
        $resultats=SubCategory::destroy($id);
        if($resultats>0)
        {
            return response()->json("The subcategory $id is deleted",200);
        }
        else
        {
            return response()->json("Error the subcategory $id was not deleted !",400);
        }
    }
    //CRUD operations on Statuses
    public function show_status(string $id)
    {
        $status= Status::findorFail($id);
        return $status;
    }
    public function create_status(Raquest $request)
    {
        Status::create($request->all());
        return response()->json("The status is added successfully !",200);
    }
    public function read_statuses()
    {
        $statuseslist = Status::all();
        return $statuseslist;
    }
    public function update_status(Request $request, $id)
    {
        $statuses = Status::find($id);
        $statuses->update($request->all());
        return response()->json(['message'=>'Status updated successfully','modification'=>$statuses],200);
    }
    public function delete_status(string $id)
    {
        $resultats=Status::destroy($id);
        if($resultats>0)
        {
            return response()->json("The status $id is deleted",200);
        }
        else
        {
            return response()->json("Error the status $id was not deleted !",400);
        }
    }
    //CRUD operations on Messages types
    public function show_message_type(string $id)
    {
        $message_type= AdminMessageType::findorFail($id);
        return $message_type;
    }
    public function create_message_type(Request $request)
    {
        AdminMessageType::create($request->all());
        return response()->json("The type is added successfully !",200);
    }
    public function read_message_types()
    {
        $mssgtypeslist = AdminMessageType::all();
        return $mssgtypeslist;
    }
    public function update_message_type(Request $request, $id)
    {
        $mssgtypes = AdminMessageType::find($id);
        $mssgtypes->update($request->all());
        return response()->json(['message'=>'Type updated successfully','modification'=>$mssgtypes],200);
    }
    public function delete_message_type(string $id)
    {
        $resultats=AdminMessageType::destroy($id);
        if($resultats>0)
        {
            return response()->json("The type $id is deleted",200);
        }
        else
        {
            return response()->json("Error the type $id was not deleted !",400);
        }
    }
    //CRUD operations on Informing Messages
    public function show_informing_message(string $id)
    {
        $informing_message= AdministrationMessage::findorFail($id);
        return $informing_message;
    }
    public function create_informing_message(Request $request)
    {
        AdministrationMessage::create($request->all());
        return response()->json("The message is sent successfully !",200);
    }
    public function read_informing_messages()
    {
        $adminmssgslist = AdministrationMessage::all();
        return $adminmssgslist;
    }
    public function update_informing_message(Request $request, $id)
    {
        $adminmssgs = AdministrationMessage::find($id);
        $adminmssgs->update($request->all());
        return response()->json(['message'=>'Message updated successfully','modification'=>$adminmssgs],200);
    }
    public function delete_informing_message(string $id)
    {
        $resultats=AdministrationMessage::destroy($id);
        if($resultats>0)
        {
            return response()->json("The message $id is deleted",200);
        }
        else
        {
            return response()->json("Error the message $id was not deleted !",400);
        }
    }
    //CRUD operations on Administarors Roles
    public function show_admin_role(string $id)
    {
        $admin_role= AdminRole::findorFail($id);
        return $admin_role;
    }
    public function create_admin_role(Request $request)
    {
        AdminRole::create($request->all());
        return response()->json("The role is added successfully !",200);
    }
    public function read_admins_roles()
    {
        $adminroleslist = AdminRole::all();
        return $adminroleslist;
    }
    public function update_admin_role(Request $request, $id)
    {
        $adminroles = AdminRole::find($id);
        $adminroles->update($request->all());
        return response()->json(['message'=>'Role updated successfully','modification'=>$adminroles],200);
    }
    public function delete_admin_role(string $id)
    {
        $resultats=AdminRole::destroy($id);
        if($resultats>0)
        {
            return response()->json("The role $id is deleted",200);
        }
        else
        {
            return response()->json("Error the role $id was not deleted !",400);
        }
    }
    //CRUD operations on Blog posts
    public function show_blog_post(string $id)
    {
        $blog_post= BlogPost::findorFail($id);
        return $blog_post;
    }
    public function create_blog_post(Request $request)
    {
        BlogPost::create($request->all());
        return response()->json("The post is added successfully !",200);
    }
    public function read_blog_posts()
    {
        $postslist = BlogPost::all();
        return $postslist;
    }
    public function update_blog_post(Request $request, $id)
    {
        $blogposts = BlogPost::find($id);
        $blogposts->update($request->all());
        return response()->json(['message'=>'Post updated successfully','modification'=>$blogposts],200);
    }
    public function delete_blog_post(string $id)
    {
        $resultats=BlogPost::destroy($id);
        if($resultats>0)
        {
            return response()->json("The post $id is deleted",200);
        }
        else
        {
            return response()->json("Error the post $id was not deleted !",400);
        }
    }
    //CRUD operations on Profils
    public function show_artist_profil(string $id)
    {
        $artist_profil= Profil::findorFail($id);
        return $artist_profil;
    }
    public function read_artists_profils()
    {
        $artistslist = Profil::all();
        return $artistslist;
    }
    //This function can be used in the validation of the profil
    //After the update the variable validated turns from on hold to either 'yes' or 'no'
    //'yes' means he can access his account and show up in the Artists page
    //'no' means his account will be deleted (trigger)
    public function update_artist_profil(Request $request, $id)
    {
        $artists = Profil::find($id);
        $artists->update($request->all());
        return response()->json(['message'=>'Artist updated successfully','modification'=>$artists],200);
    }
    public function delete_artist_profil(string $id)
    {
        $resultats=Profil::destroy($id);
        if($resultats>0)
        {
            return response()->json("The profil $id is deleted",200);
        }
        else
        {
            return response()->json("Error the profil $id was not deleted !",400);
        }
    }
    //CRUD operations on Artworks
    public function show_artwork(string $id)
    {
        $artwork= Artwork::findorFail($id);
        return $artwork;
    }
    public function read_artworks()
    {
        $artworkslist = Artwork::all();
        return $artworkslist;
    }
    public function delete_artwork(string $id)
    {
        $resultats=Artwork::destroy($id);
        if($resultats>0)
        {
            return response()->json("The artwork $id is deleted",200);
        }
        else
        {
            return response()->json("Error the artwork $id was not deleted !",400);
        }
    }
    //CRUD operations on Clients
    public function show_client(string $id)
    {
        $client= Client::findorFail($id);
        return $client;
    }
    public function read_clients()
    {
        $clientslist = Client::all();
        return $clientslist;
    }
    public function update_client(Request $request, $id)
    {
        $clients = Client::find($id);
        $clients->update($request->all());
        return response()->json(['message'=>'Client updated successfully','modification'=>$clients],200);
    }
    public function delete_client(string $id)
    {
        $resultats=Client::destroy($id);
        if($resultats>0)
        {
            return response()->json("The client $id is deleted",200);
        }
        else
        {
            return response()->json("Error the client $id was not deleted !",400);
        }
    }
    //CRUD operations on Clients comments
    public function show_client_message(string $id)
    {
        $client_message= ClientComment::findorFail($id);
        return $client_message;
    }
    public function read_clients_messages()
    {
        $clientmssgslist = ClientComment::all();
        return $clientmssgslist;
    }
    public function delete_client_message(string $id)
    {
        $resultats=ClientComment::destroy($id);
        if($resultats>0)
        {
            return response()->json("The client's comment $id is deleted",200);
        }
        else
        {
            return response()->json("Error the client's comment $id was not deleted !",400);
        }
    }
    //CRUD operations on Visitors
    public function show_visitor(string $id)
    {
        $visitor= Visitor::findorFail($id);
        return $visitor;
    }
    public function read_visitors()
    {
        $visitorslist = Visitor::all();
        return $visitorslist;
    }
    public function delete_visitor(string $id)
    {
        $resultats=Visitor::destroy($id);
        if($resultats>0)
        {
            return response()->json("The visitor $id is deleted",200);
        }
        else
        {
            return response()->json("Error the visitor $id was not deleted !",400);
        }
    }
    //CRUD operations on Visitors Messages
    /*

    public function show_visitor_message(string $id)
    {
        $visitor_message= Visitor::findorFail($id);
        return $visitor_message;
    }
    //This should be included with the visitor
    public function read_visitor_message()
    {

    }
    public function delete_visitor_message(string $id)
    {
        $resultats=Visitor::destroy($id);
        if($resultats>0)
        {
            return response()->json("The visitor message $id is deleted",200);
        }
        else
        {
            return response()->json("Error the visitor message $id was not deleted !",400);
        }
    }
    */
    //CRUD operations on Administrators
    /*public function create_admin(Request $request)
    {
        $request->password->bcrypt();
        Administrator::create($request->all());
        return response()->json("The admin is added successfully !",200);
    }*/
    public function admin(string $id)
    {
        $admin = Administrator::findorFail($id);
        return $admin;
    }
    public function create_admin(Request $request)
    {
        $password = bcrypt($request->input('password')); // Hash the password
        $request->merge(['password' => $password]); // Replace the plain text password with the hashed one
        Administrator::create($request->all()); // Create the administrator with the hashed password
        return response()->json("The admin is added successfully !", 200);
    }
    public function read_admins()
    {
        $adminslist = Administrator::all();
        return $adminslist;
    }
    public function update_admin(Request $request, $id)
    {
        $admins = Administrator::find($id);
        if (!$admins) {
            return response()->json(['message' => 'Administrator not found'], 404);
        }
        $password = bcrypt($request->input('password'));
        $request->merge(['password' => $password]);
        $admins->update($request->all());
        return response()->json(['message'=>'Admin updated successfully','modification'=>$admins],200);
    }
    public function delete_admin(string $id)
    {
        $resultats=Administrator::destroy($id);
        if($resultats>0)
        {
            return response()->json("The admin $id is deleted",200);
        }
        else
        {
            return response()->json("Error the admin $id was not deleted !",400);
        }
    }
    //CRUD operations on Chat Messages
    public function show_chat_message(string $id)
    {
        $chat_message= AdminChatMessage::findorFail($id);
        return $chat_message;
    }
    public function create_chat_message(Request $request)
    {
        AdminChatMessage::create($request->all());
        return response()->json("The chat message is added successfully !",200);
    }
    public function read_chat_messages()
    {
        $adminchatmssgs = AdminChatMessage::all();
        return $adminchatmssgs;
    }
    public function update_chat_message(Request $request, $id)
    {
        $chatmssgs = AdminChatMessage::find($id);
        $chatmssgs->update($request->all());
        return response()->json(['message'=>'Chat message updated successfully','modification'=>$chatmssgs],200);
    }
    public function delete_chat_message(string $id)
    {
        $resultats=AdminChatMessage::destroy($id);
        if($resultats>0)
        {
            return response()->json("The chat message  $id is deleted",200);
        }
        else
        {
            return response()->json("Error the chat message $id was not deleted !",400);
        }
    }
    //CRUD operations on Analytics Notes
    public function show_note(string $id)
    {
        $note= AdminNote::findorFail($id);
        return $note;
    }
    public function create_note(Request $request)
    {
        AdminNote::create($request->all());
        return response()->json("The note is added successfully !",200);
    }
    public function read_notes()
    {
        $adminnoteslist = AdminNote::all();
        return $adminnoteslist;
    }
    public function update_note(Request $request, $id)
    {
        $notes = AdminNote::find($id);
        $notes->update($request->all());
        return response()->json(['message'=>'Note updated successfully','modification'=>$notes],200);
    }
    public function delete_note(string $id)
    {
        $resultats=AdminNote::destroy($id);
        if($resultats>0)
        {
            return response()->json("The note $id is deleted",200);
        }
        else
        {
            return response()->json("Error the note $id was not deleted !",400);
        }
    }
    //CRUD operations on Transactions
    public function show_transaction(string $id)
    {
        $transaction= Transaction::findorFail($id);
        return $transaction;
    }
    public function create_transaction(Request $request)
    {
        Transaction::create($request->all());
        return response()->json("The transaction is added successfully !",200);
    }
    public function read_transactions()
    {
        $transactionslist = Transaction::all();
        return $transactionslist;
    }
    public function update_transaction(Request $request, $id)
    {
        $transactions =Transaction::find($id);
        $transactions->update($request->all());
        return response()->json(['message'=>'Transaction modified successfully','modified_item'=>$transactions],200);
    }
    public function delete_transaction(string $id)
    {
        $resultats=Transaction::destroy($id);
        if($resultats>0)
        {
            return response()->json("The transaction $id is deleted",200);
        }
        else
        {
            return response()->json("Error the transaction $id was not deleted !",400);
        }
    }
    //CRUD operations on Payments
    public function create_payment_method()
    {
        Payment::create($request->all());
        return response()->json("The payment method is added successfully !",200);
    }
    public function read_payment_methods()
    {
        $paymentmethodslist = Payment::all();
        return $paymentmethodslist;
    }
    public function update_payment_method(Request $request, $id)
    {
        $paymentmethods =Payment::find($id);
        $paymentmethods->update($request->all());
        return response()->json(['message'=>'Payment method modified successfully','modified_item'=>$paymentmethods],200);
    }
    public function delete_payment_method(string $id)
    {
        $resultats=Payment::destroy($id);
        if($resultats>0)
        {
            return response()->json("The payment method $id is deleted",200);
        }
        else
        {
            return response()->json("Error the payment method $id was not deleted !",400);
        }
    }
    //show functions get an elemet (GET  /elements/{id}   id->element_id  show)


}
