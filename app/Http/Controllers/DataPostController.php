<?php

namespace App\Http\Controllers;

use App\Models\data_post;
use App\Models\Employer;
use App\Models\Tag;
use App\Http\Requests\Storedata_postRequest;
use App\Http\Requests\Updatedata_postRequest;
use Illuminate\Support\Facades\Auth;


class DataPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = data_post::with('user')->latest()->paginate(2);
        return view('data_posts.index', [
       'data_posts' => $posts,
       'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data_posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    //Storedata_postRequest $request parameter
    public function store()
    {
            //validation
      request()->validate([
         'arabic_title' => ['required'],
         'english_title' => ['required'],
         'league_update' => ['required', 'in:Yearly,Biannual,Monthly,Daily'],
         'status' => ['required', 'in:Published,Unpublished'],
      ]);

     //store in DB
      data_post::create([
         'arabic_title' => request('arabic_title'),
         'english_title' => request('english_title'),
         'league_update' => request('league_update'),
         'status' => request('status'),
         //'employer_id' => 1,
         'user_id' => Auth::id(),
      ]);

      return redirect('/data_post');
    }

    /**
     * Display the specified resource.
     */
    public function show(data_post $data_post)
    {
        return view('data_posts.post', ['data_post' => $data_post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(data_post $data_post)
    {
        return view('data_posts.edit', ['data_post' => $data_post]);
    }

    /**
     * Update the specified resource in storage.
     */
    //Updatedata_postRequest $request, parameter
    public function update(data_post $data_post)
    {
            //validate
      request()->validate([
         'arabic_title' => ['required'],
         'english_title' => ['required'],
         'league_update' => ['required', 'in:Yearly,Biannual,Monthly,Daily'],
         'status' => ['required', 'in:Published,Unpublished'],
       ]);
        //authorize (NO NEED)

       //update

       $data_post->update([
         'arabic_title' => request('arabic_title'),
         'english_title' => request('english_title'),
         'league_update' => request('league_update'),
         'status' => request('status'),
       ]);

       //redirect
       return redirect('/data_post/' . $data_post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data_post $data_post)
    {
      //authorize (NO NEED)

       //delete
       $data_post->delete();

       //redirect
       return redirect('/data_post');
    }
}
