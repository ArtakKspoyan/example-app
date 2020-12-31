<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContactUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contacts()
    {
        $not_contacts = User::all();
        return view('contacts')->with(compact('not_contacts'));
    }

    public function contactAdd($id)
    {
        $user = User::find($id);
        Auth::user()->addContact($user);
        return Redirect::back()->with('message', 'YOU ADDED!');;
    }

    public  function  contactsSave()
    {
        $contacts = ContactUser::where('user_id', Auth::id())->with('user')->get();
        $save_contacts = array();
        foreach ($contacts as $contact){
            $save_contacts[] = User::all()->where('id',  $contact->contact_id );
        }
        return view('contactsSave')->with(compact('save_contacts'));
    }

    public  function  contactDelete($id)
    {
        $user = User::find($id);
        Auth::user()->removeContact($user);
        return Redirect::back()->with('message', 'YOU DELETED!');;
    }
}
