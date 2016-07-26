<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlyerRequest;
use App\Flyer;
use App\Photo;

class FlyersController extends Controller
{
    //
    public function index()
    {
        //code
    }

    public function show($zip, $street)
    {
        $flyer = Flyer::locatedAt($zip, $street);
        return view('flyers.show', compact('flyer'));
    }

    public function addPhoto($zip, $street, Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg,png,bmp'
        ]);

        $photo = Photo::fromForm($request->file('photo'));

        Flyer::locatedAt($zip, $street)->addPhoto($photo);

        return 'Done uploading photo!';
    }


    public function create()
    {
        return view('flyers.create');
    }

    public function store(FlyerRequest $request)
    {
        // persist form data
        Flyer::create($request->all());

        // flash messaging
        flash()->overlay('Success!', 'You have successfully created a flyer!');

        //redirect back to form
        return redirect()->back();
    }
}
