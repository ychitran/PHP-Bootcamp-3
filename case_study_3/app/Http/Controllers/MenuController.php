<?php

namespace App\Http\Controllers;

use App\Components\MenuRecursive;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    private $menu;
    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = Menu::all();

        $menus = DB::table('menus')->simplePaginate(6);
        return view('admin.menus.list', compact('menus'));
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

        return view('admin.menus.create', compact('htmlOption'));
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

        $menu = new Menu();
        $menu->name = $request->input('name');
        $menu->parent_id = $request->input('parent_id');
        $menu->slug = Str::slug($request->input('name'));
        $menu->save();

        //Tạo Session khi thành công
        Session::flash('success', 'Category add successfully');

        //Tạo xong quay về list

        return redirect()->route('menus.index');
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
        $menus = $this->menu->all();
        $recursive = new MenuRecursive($menus);
        $htmlOption = $recursive->MenuRecursive($parent_id);
        return $htmlOption;
    }
    public function edit($id)
    {
        //
        $menu = Menu::findOrFail($id);
        $htmlOption = $this->getCategory($menu->parent_id);
        return view('admin.menus.edit', compact('menu', 'htmlOption'));
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

        $menu = Menu::findOrFail($id);
        $menu->name = $request->input('name');
        $menu->parent_id = $request->input('parent_id');
        $menu->slug = $request->input('slug');
        $menu->save();

        //Thông báo cập nhật thành công

        Session::flash('success', 'Update Successfully');

        //Quay trở về list

        return redirect()->route('menus.index');
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
        $menu = Menu::findOrFail($id);
        $menu->delete();

        //Thông báo xoá thành công

        Session::flash('success', 'Deleted Successfully');

        //Quay trở về list

        return redirect()->route('menus.index');
    }
}
