<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\User;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    public $user;
    public $viewData = [];

    public function __construct()
    {
        $this->user = User::findOrFail(5);
        $this->viewData['user'] = $this->user;
        $this->viewData['contacts'] = $this->user->contacts;
        $this->viewData['trashed'] = $this->user->trashed();
    }


    

    

    public function index(){
        $this->viewData['title'] = "My Contacts";
        return view('Contacts')->with('viewData', $this->viewData);
    }

    public function trash(){
        $this->viewData['title'] = "My Trash";
        return view('Trash')->with('viewData', $this->viewData);
    }


    public function delete($id){
        Contacts::find($id)->delete();
        return back();
    }
}
