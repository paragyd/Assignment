<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('image');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function imageUpload(Request $request): RedirectResponse
    {
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
        ]);

        foreach ($request->image as $key => $value) {
            $imageName = time().'.'.$value->extension();
            $value->move(public_path('images'),$imageName);

            $imageNams[] = $imageName;
        }

        return redirect()->back()->withSuccess('You have successfully upload image.')->with('image',$imageNams);
    }

}