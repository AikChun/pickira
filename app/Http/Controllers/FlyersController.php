<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlyerRequest;
use App\Flyer;

class FlyersController extends Controller
{
    //
    public function index()
    {
        //code
    }

    public function create()
    {
        //flash('Success!', "You have successfully created a flyer!");
        flash()->overlay('Success!', 'You have successfully created a flyer!');
        return view('flyers.create');
    }

    public function store(FlyerRequest $request)
    {
        // persist form data
        Flyer::create($request->all());



        // flash messaging

        //redirect back to form
        return redirect()->back();
    }
}
