<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Incident;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     esta funcion te permite reedirigir entre un usuario que iniciaron session
     middle
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function getReport()
    {
        //inyectar la variable categories para que se accesible para el foreach de report.blade.php 
        $categories = category::where('project_id', 1)->get();
        return view('report')->with(compact('categories'));
    }

    public function postReport(Request $request)
    {
        $incident = new Incident();
        $incident->category_id = $request->input ('category_id') ?: null;
        $incident->severity = $request->input ('severity');
        $incident->title = $request->input('title');
        $incident->description = $request->input('description');
        $incident->client_id = auth()->user()->id;
        $incident->save();

        return back();
    }
}
