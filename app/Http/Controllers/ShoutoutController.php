<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shout;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShoutoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoutouts = Shout::all();

        return view('shoutouts.index', ['shouts' => $shoutouts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'shoutout' => 'required'
        ]);

        $request->user()->shouts()->create([
            'text' => $request->shoutout,
        ]);

        return redirect('shouts');
    }

}
