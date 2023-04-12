<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    public $user;
    public $viewData = [];

    public function __construct()
    {
        $this->user = User::findOrFail(3);
        $this->viewData['user'] = $this->user;
        $this->viewData['contacts'] = $this->user->contacts;
        $this->viewData['trashed'] = $this->user->trashed();
        $this->viewData['favorite'] = $this->user->favorite();
    }

    //contact list view controller
    public function index(){
        $this->viewData['title'] = "My Contacts";
        $this->viewData['pageData'] = $this->viewData['contacts'];
        return view('Contacts')->with('viewData', $this->viewData);
    }

    //delete contact view controller
    public function trash(){
        $this->viewData['title'] = "My Trash";
        return view('Trash')->with('viewData', $this->viewData);
    }

    //favorite contact view controller
    public function favorite(){
        $this->viewData['title'] = "My Favorite";
        $this->viewData['pageData'] = $this->viewData['favorite'];
        return view('Favorite')->with('viewData', $this->viewData);
    }

    //create a new contact
    public function new(){
        $this->viewData['title'] = "New Contact";
        return view('New')->with('viewData', $this->viewData);
    }


    public function store(Request $request){
        
        $validator = $request->validate([
            'name' => 'string|nullable',
            'num' => 'required',
            'mail' => 'email|nullable'
        ]);

        if ($request->has('favorite')) {
            $this->user->contacts()->create([
                'name' => $request->input('name'),
                'num' => $request->input('num'),
                'mail' => $request->input('mail'),
                'favorite' => 'yes',
                'user_id' => $this->user->getId()
            ]);
        } else {
            $this->user->contacts()->create([
                'name' => $request->input('name'),
                'num' => $request->input('num'),
                'mail' => $request->input('mail'),
                'favorite' => 'no',
                'user_id' => $this->user->getId()
            ]);
        }

        return redirect('/contacts');
    }

    //delete a contact
    public function delete($id){
        Contacts::find($id)->delete();
        return back();
    }
}
