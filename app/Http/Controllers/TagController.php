<?php

namespace App\Http\Controllers;

use App\Models\data_post;
use App\Models\Employer;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::with('data_posts')->latest()->paginate(2);
        return view('tags.index', [
        'tags' => $tags,
        ]);   
    }
    
    public function create()
    {
        return view('tags.create');
    }

    public function show(Tag $tag)
    {
        return view('tags.tag-post', ['tag' => $tag]);
    }

    public function store()
    {
            //validation
     request()->validate([
         'arabic_name' => ['required'],
         'english_name' => ['required'],
      ]);
      //store in DB
     Tag::create([
         'arabic_name' => request('arabic_name'),
         'english_name' => request('english_name'),
      ]);

     return redirect('/tag');
    }

    public function edit(Tag $tag)
    {
      return view('tags.tag-edit', ['tag' => $tag]);
    }

    public function update(Tag $tag)
    {
            //validate
     request()->validate([
         'arabic_name' => ['required'],
         'english_name' => ['required'],
      ]);
     //authorize (NO NEED)

      //update
      $tag->update([
         'arabic_name' => request('arabic_name'),
         'english_name' => request('english_name'),
      ]);

      //redirect
      return redirect('/tag/' . $tag->id);
    }

    public function destroy(Tag $tag){
      //authorize (NO NEED)

      //delete
      $tag->delete();

      //redirect
       return redirect('/tag');
    }
    
}
