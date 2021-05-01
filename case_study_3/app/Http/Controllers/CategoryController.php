<?php

namespace App\Http\Controllers;

use App\Components\Recursive;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();

        $categories = DB::table('categories')->simplePaginate(9);
        return view('admin.categories.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        $htmlOption = $this->getCategory($parent_id = '');

        return view('admin.categories.create', compact('htmlOption'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
        $category = new Category();
        $category->name = $request->input('name');
        $category->parent_id = $request->input('parent_id');
        $category->slug = Str::slug($request->input('name'));
        $category->save();

        //Tạo Session khi thành công
        Session::flash('success', 'Category add successfully');

        //Tạo xong quay về list

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function getCategory($parent_id)
    {
        $categories = $this->category->all();
        $recursive = new Recursive($categories);
        $htmlOption = $recursive->categoryRecursive($parent_id);
        return $htmlOption;
    }
    public function edit($id)
    {
        //
        $category = Category::findOrFail($id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('admin.categories.edit', compact('category', 'htmlOption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->parent_id = $request->input('parent_id');
        $category->slug = $request->input('slug');
        $category->save();

        //Thông báo cập nhật thành công

        Session::flash('success', 'Update Successfully');

        //Quay trở về list

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::findOrFail($id);
        $category->delete();

        //Thông báo xoá thành công

        Session::flash('success', 'Deleted Successfully');

        //Quay trở về list

        return redirect()->route('categories.index');
    }
}
