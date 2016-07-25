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

    public function show($zip, $street)
    {
        $flyer = Flyer::locatedAt($zip, $street);
        return view('flyers.show', compact('flyer'));
    }

    public function addPhoto($zip, $street, Request $request)
    {
        // find the flyer
        $flyer = Flyer::locatedAt($zip, $street);

        // prep the name of the photo
        $file = $request->file('file');
        $filename = time().$file->getClientOriginalName();

        if ($flyer->photos()->create(['path' => "/flyers/photos/{$filename}"])) {
            $file->move('flyers/photos', $filename);
        }

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
