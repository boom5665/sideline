<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function mainindex()
    {
        $data['mains'] = Post::latest()->paginate(12);
        return view('posts.main',  $data);
    }
    public function sidelinelist()
    {
        $data['mains'] = Post::latest()->paginate(12);
        return view('posts.sidelinelist', $data);
    }

    public function underlist()
    {
        $data['mains'] = Post::latest()->paginate(12);
        return view('posts.underlist', $data);
    }

    public function undersidelinedetail()
    {
        $data['mains'] = Post::latest()->paginate(12);
        return view('posts.undersidelinedetail', $data);
    }

   

    public function followindex()
    {
        $data['follows'] = Post::latest()->paginate();
        return view('posts.follow', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.Addsideline');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sex' => 'required',
            'money' => 'required',
            'job' => 'required',
            'location1' => 'required',
            'location2' => 'required',
            'location3' => 'required',
            'location4' => 'required',
            'description' => 'required',
            'danger' => 'required',
            'line' => 'required',
            'age' => 'required',
            'milk' => 'required',
            'waist' => 'required',
            'hip' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/image/',$name);
                $data[] = $name;
            }
        }
        $Upload_model = new Post;
        $Upload_model->filename = json_encode($data);
        $Upload_model->title = $request->title;
        $Upload_model->sex = $request->sex;
        $Upload_model->money = $request->money;
        $Upload_model->job = $request->job;
        $Upload_model->location1 = $request->location1;
        $Upload_model->location2 = $request->location2;
        $Upload_model->location3 = $request->location3;
        $Upload_model->location4 = $request->location4;
        $Upload_model->description = $request->description;
        $Upload_model->danger = $request->danger;
        $Upload_model->line = $request->line;
        $Upload_model->age = $request->age;
        $Upload_model->milk = $request->milk;
        $Upload_model->waist = $request->waist;
        $Upload_model->hip = $request->hip;
        $Upload_model->height = $request->height;
        $Upload_model->weight = $request->weight;
        $Upload_model->save();




        return redirect()->route('posts.index')
                        ->with('success','posts created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function show(Post $post)
    // {
    //     return view('posts.show', compact('post'));

    // }

    public function show(Post $post)
    {
        return view('posts.datastar', compact('post'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'sex' => 'required',
            'money' => 'required',
            'job' => 'required',
            'location1' => 'required',
            'location2' => 'required',
            'location3' => 'required',
            'location4' => 'required',
            'description' => 'required',
            'danger' => 'required',
            'line' => 'required',
            'age' => 'required',
            'milk' => 'required',
            'waist' => 'required',
            'hip' => 'required',
            'height' => 'required',
            'weight' => 'required',

        ]);

        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/image/',$name);
                $data[] = $name;
            }
        }

        $Upload_model = new Post;
        $Upload_model = Post::find($id);
        $Upload_model->filename = json_encode($data);
        $Upload_model->title = $request->get('title');
        $Upload_model->sex = $request->get('sex');
        $Upload_model->money = $request->get('money');
        $Upload_model->job = $request->get('job');
        $Upload_model->location1 = $request->get('location1');
        $Upload_model->location2 = $request->get('location2');
        $Upload_model->location3 = $request->get('location3');
        $Upload_model->location4 = $request->get('location4');
        $Upload_model->description = $request->get('description');
        $Upload_model->danger = $request->get('danger');
        $Upload_model->line = $request->get('line');
        $Upload_model->age = $request->get('age');
        $Upload_model->milk = $request->get('milk');
        $Upload_model->waist = $request->get('waist');
        $Upload_model->hip = $request->get('hip');
        $Upload_model->height = $request->get('height');
        $Upload_model->weight = $request->get('weight');
        $Upload_model->save();
        return redirect()->route('posts.index')
            ->with('success', 'Post update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
            ->with('success', 'Post delete Success');
    }



}
