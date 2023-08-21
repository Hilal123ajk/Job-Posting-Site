<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    // Get all listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->byTags(request(['tag', 'search']))->paginate(4)
        ]);
    }

    // Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show form for creating listing
    public function create(Request $request)
    {
        return view('listings.create');
    }

    // Create listing and save in database
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'company' => 'required|min:3',
            'title' => 'required',
            'website' => 'required',
            'email' => 'required|email',
            'tags' => 'required',
            'description' => 'required'
        ]);

         $formFields['user_id'] = auth()->id();


        if($request->hasFile('logo'))
        {
            $logoFile = $request->file('logo');
            $fileName = $logoFile->store('logos', 'public');
            $formFields['logo'] = $fileName;
        }


        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing Created Successfully!');
    }


    public function edit(Listing $listing)
    {
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'company' => 'required|min:3',
            'title' => 'required',
            'website' => 'required',
            'email' => 'required|email',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo'))
        {
            $logoFile = $request->file('logo');
            $fileName = $logoFile->store('logos', 'public');
            $formFields['logo'] = $fileName;
        }

        $listing->update($formFields);

        return back()->with('message', 'Updated Successfully!');
    }

    public function delete(Listing $listing)
    {
        $listing->delete();

        return redirect('/')->with('message', 'Deleted Successfully!');
    }
}
