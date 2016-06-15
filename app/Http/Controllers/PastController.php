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

    public function viewpaste(Request $request, Paste $paste)
    {
        return view('somepaste', [
            'pastes' => Paste::where('id', $paste->id )
                ->orderBy('created_at', 'asc')
                ->get()
        ]);
    }
    
    public function index(Request $request)
    {
        if(Auth::check()) {
            return view('main', [
                'pastenames' => $this->pastes->forUser($request->user())
            ]);
        }
        else{
            return view('main', [
                'pastenames' => Paste::orderBy('id', 'desc')->take(10)->get()
            ]);
        }
    }
 //$this->pastes->forUser($request->user()),
}
