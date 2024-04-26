<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    //CRUD operations on Visitors messages
    public function create_visitor_message(Request $request)
    {
        Visitor::create($request->all());
        return response()->json("The visitor sent a message !",200);
    }
    //function read is in the AdministrationController
    public function update_visitor_message(Request $request, $id)
    {
        $visitors = Visitor::find($id);
        $visitors->update($request->all());
        return response()->json(['message'=>'Visitor updated the message successfully','modification'=>$visitors],200);
    }
}
