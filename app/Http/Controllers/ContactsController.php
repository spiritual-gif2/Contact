<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    //
    public $user;
    public $viewData = [];
    public $userID;

    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function load(){

        $this->userID = Auth::id();
        $this->user = User::find($this->userID);
        $this->viewData['user'] = $this->user;
        if ($this->user) {
            $this->viewData['contacts'] = $this->user->contacts;
            $this->viewData['trashed'] = $this->user->trashed();
            $this->viewData['favorite'] = $this->user->favorite();
        }

    }

    //contact list view controller
    public function index(){
        $this->load();
        $this->viewData['title'] = "My Contacts";
        $this->viewData['pageData'] = $this->viewData['contacts'];
        return view('Contacts')->with('viewData', $this->viewData);
    }

    //delete contact view controller
    public function trash(){
        $this->load();
        $this->viewData['title'] = "My Trash";
        return view('Trash')->with('viewData', $this->viewData);
    }

    //favorite contact view controller
    public function favorite(){
        $this->load();
        $this->viewData['title'] = "My Favorite";
        $this->viewData['pageData'] = $this->viewData['favorite'];
        return view('Favorite')->with('viewData', $this->viewData);
    }

    //create a new contact
    public function new(){
        $this->load();
        $this->viewData['title'] = "New Contact";
        return view('New')->with('viewData', $this->viewData);
    }


    public function store(Request $request){
        $this->load();
        
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

    //edit a given contact
    public function edit($id){
        $this->load();
        $this->viewData['title'] = "Edit Contact";
        $this->viewData['edited'] = Contacts::findOrFail($id);
        return view('Edit')->with('viewData', $this->viewData);
    }

    public function update(Request $request, $id){
        $this->load();

        $validator = $request->validate([
            'name' => 'string|nullable',
            'num' => 'required',
            'mail' => 'email|nullable'
        ]);

        $edited = Contacts::findOrFail($id);
        
        if ($request->has('favorite')) {
            $edited->setName($request->input('name'));
            $edited->setNum($request->input('num'));
            $edited->setMail($request->input('mail'));
            $edited->setFavorite('yes');
        } else {
            $edited->setName($request->input('name'));
            $edited->setNum($request->input('num'));
            $edited->setMail($request->input('mail'));
            $edited->setFavorite('no');
        }

        $edited->save();

        return redirect('/contacts');

    }


    //delete a contact
    public function delete($id){
        $this->load();
        Contacts::find($id)->delete();
        return back();
    }
}
