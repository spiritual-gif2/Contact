<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\User;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    public function index(){

        $viewData = [];
        //$viewData['contacts'] = Contacts::all();
        $viewData['users'] = Contacts::find(20)->getName();
        return view('Contacts')->with('viewData', $viewData);
    }
}
