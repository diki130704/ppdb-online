<?php

namespace App\Http\Controllers;

use App\Models\Data_peserta;

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
    public function home()
    {
        $datapeserta = Data_peserta::all();
        return view('home', compact('datapeserta'));
    }

}
