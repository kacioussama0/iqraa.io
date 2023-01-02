<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
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


    public function change_language($locale) {
        try {
            if(array_key_exists($locale,config('locale.languages'))) {
                App::setLocale($locale);
                Lang::setLocale($locale);
                Session::put('locale',$locale);
                Carbon::setLocale($locale);
            }
            return redirect()->to('/');
        }catch (\Exception $exception) {
            return redirect()->back();
        }
    }

}
