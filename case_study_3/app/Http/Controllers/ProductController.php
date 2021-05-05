<?php

namespace App\Http\Controllers;

use App\Components\Recursive;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
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
        $products = DB::table('products')->simplePaginate(9);
        return view('admin.products.list');
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

        return view('admin.products.create', compact('htmlOption'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function getCategory($parent_id)
    {
        $categories = $this->category->all();
        $recursive = new Recursive($categories);
        $htmlOption = $recursive->categoryRecursive($parent_id);
        return $htmlOption;
    }
    public function store(Request $request)
    {
        $product = new Product();
        $dataProductCreate = [
            'name' => $request->name,
            'price' => $request->price,
            'content' => $request->content,
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,

        ];
        // Lấy filename gốc của ảnh
        $file = $request->feature_image_path;
        $fileNameOrigin = $file->getClientOriginalName();
        $fileNameHash = Str::random(20) . '.' . $file->getClientOriginalExtension();
        //Upload ảnh vào thư mục public/product
        $path = $request->file('feature_image_path')->storeAs('public/product/' . auth()->id(), $fileNameHash);
        $data = [
            'file_name' => $fileNameOrigin,
            'file_path' => Storage::url($path)
        ];
        $product->save();

        //Tạo Session khi thành công
        Session::flash('success', 'Product add successfully');

        //Tạo xong quay về list

        return redirect()->route('products.index');
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


    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        $htmlOption = $this->getProduct($product->parent_id);
        return view('admin.products.edit', compact('product', 'htmlOption'));
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

        //Thông báo cập nhật thành công

        Session::flash('success', 'Update Successfully');

        //Quay trở về list

        return redirect()->route('products.index');
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
        $product = Product::findOrFail($id);
        $product->delete();

        //Thông báo xoá thành công

        Session::flash('success', 'Deleted Successfully');

        //Quay trở về list

        return redirect()->route('products.index');
    }
}
