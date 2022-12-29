<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\File;

class CategoryController extends Controller
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



    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.index',compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
            'image' => ['required',
                File::image()->max(1024*5)

                ],

        ]);

        $image = $request->file('image')->store('categories','public');

        Category::create([
            'name' => $request->name,
            'slug' => Str::words($this->slug($request->name,'-'),5),
            'image' => $image
        ]);

        return redirect()->to('admin/categories')->with([
            'success' => 'تمت الإضافة بنجاح'
        ]);

    }


    public function show(Category $category)
    {
        //
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'image' =>
                File::image()->max(1024*5)



        ]);


        $image = '';

        if(!empty($request->file('image'))) {
            if(\Illuminate\Support\Facades\File::exists(public_path('storage/' . $category->image))) {
                unlink(public_path('storage/' . $category->image));
            }

            $image = $request->file('image')->store('categories/','public');

        }


        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name,'-'),
            'image' => $image ? $image : $category->image,
        ]);

        return redirect()->to('admin/categories')->with([
            'success' => 'تم التعديل بنجاح'
        ]);
    }

    public function destroy(Category $category)
    {
        if(\Illuminate\Support\Facades\File::exists(public_path('storage/' . $category->image))) {
            unlink(public_path('storage/' . $category->image));
        }

        $category -> delete();

        return redirect()->to('admin/categories')->with([
            'success' => 'تم الحذف بنجاح'
        ]);
    }
}
