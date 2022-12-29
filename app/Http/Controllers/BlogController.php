<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function categories() {
        $categories = Category::latest()->get();

        return view('school-news',compact('categories'));
    }


    public function categoryPosts($category) {


        $cat = Category::where('slug' , $category)->first();


        if(empty($cat)) {
            abort(404);
        }



        return view('category-posts',compact('cat'));

    }


    public function categoryPost($category,$post) {


        $cat = Category::where('slug' , $category)->first();


        if(empty($cat)) {
            abort(404);
        }

        $catpost = $cat -> posts -> where('slug',$post) -> first();


        if(empty($catpost)) {
            abort(404);
        }


        return view('post',compact('catpost'));



    }

}
