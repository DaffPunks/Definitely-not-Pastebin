<?php

namespace App\Http\Controllers;

use App\Paste;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\PasteRepository;

use Illuminate\Support\Facades\Auth;

class PastController extends Controller
{

    protected $pastes;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(PasteRepository $pastes)
    {
        //$this->middleware('auth');

        $this->pastes = $pastes;
    }

    public function sendpaste(Request $request)
    {
        $paste = new Paste();
        $paste->text = $request->text;
        $paste->name = $request->name;
        if(Auth::check()) {
            $paste->owner_id = $request->user()->id;
        }
        $paste->save();

        return redirect('/');
    }

    public function viewpaste()
    {
        return view('paste', [
            
        ]);
    }
    
    public function index(Request $request)
    {
        if(Auth::check()) {
            return view('main', [
                'pastenames' => $this->pastes->forUser($request->user()),
                'pastes' => Paste::orderBy('id', 'asc')->get()
            ]);
        }
        else{
            return view('main', [
                'pastenames' => Paste::orderBy('id', 'asc')->get(),
                'pastes' => Paste::orderBy('id', 'asc')->get()
            ]);
        }
    }
 //$this->pastes->forUser($request->user()),
}
