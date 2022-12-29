<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\File;

class PostController extends Controller
{

    public function slug($string, $separator = '-') {

        if (is_null($string)) {
            return "";
        }

        $string = trim($string);

        $string = mb_strtolower($string, "UTF-8");;

        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

        $string = preg_replace("/[\s-]+/", " ", $string);

        $string = preg_replace("/[\s_]/", $separator, $string);

        return $string;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.posts.create',compact('categories'));

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
            'title' => 'required|unique:posts',
            'category' => 'required',
            'image' => [
                'required',
                File::image()->max(1024*5)
            ],
            'content' => 'required',
        ]);

        $image = $request->file('image')->store('posts/','public');

        Category::find($request->category)->posts()->create([

           'title' => $request->title,
           'slug' => Str::words($this->slug($request->title,'-'),5),
           'content' => $request['content'],
           'image' => $image,

        ]);

        return redirect()->to('admin/posts')->with([
            'success' => 'تمت الإضافة بنجاح'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::latest()->get();
        return view('admin.posts.edit',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|unique:posts,title,' . $post -> id,
            'category' => 'required',
            'image' => [
                File::image()->max(1024*5)
            ],
            'content' => 'required',
        ]);

        $image = '';

        if(!empty($request->file('image'))) {
            if(\Illuminate\Support\Facades\File::exists(public_path('storage/' . $post->image))) {
                unlink(public_path('storage/' . $post->image));
            }

            $image = $request->file('image')->store('posts/','public');

        }



        $post->update([

            'title' => $request->title,
            'slug' => Str::words($this->slug($request->title,'-'),5),
            'content' => $request['content'],
            'image' => $image ? $image : $post->image,
            'category_id' => $request->category


        ]);

        return redirect()->to('admin/posts')->with([
            'success' => 'تم التعديل بنجاح'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(\Illuminate\Support\Facades\File::exists(public_path('storage/' . $post->image))) {
            unlink(public_path('storage/' . $post->image));
        }

        $post -> delete();

        return redirect()->to('admin/posts')->with([
            'success' => 'تم الحذف بنجاح'
        ]);
    }


    public function uploadImage(Request $request) {

        if($request -> hasFile('upload')) {
            $image = $request->file('upload')->store('posts/images','public');
            return response()->json(['filename' => $image , 'uploaded' => 1 , 'url' => asset('storage/' . $image)]);
        }

    }


}
