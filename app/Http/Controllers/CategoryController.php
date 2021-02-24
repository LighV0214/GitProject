<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view_create_category(){
        return view('admin.create_category');
    }

    public function create_category(Request $request)
    {
        //insert product
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_des'] = $request->category_des;
        $data['category_status'] = $request->category_status;
        
        DB::Table('tbl_category')->insert($data);
        Session::put('message','Insert category Success !!!');
        return redirect('/admin/view-create-category');
    }

    public function view_list_category()
    {
        //Show all list
        $all_category = DB::Table('tbl_category')->orderby('category_id','desc')->get();
        
        return view('admin.list_category')->with('all_category',$all_category);
    }

    public function edit_category($category_id)
    {
        $edit_category = DB::Table('tbl_category')->where('category_id', $category_id)->get();

        return view('admin.edit_category')->with('edit_category',$edit_category);
    }

    public function update_category(Request $request, $category_id)
    {
        //insert product
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_des'] = $request->category_des;        
        $data['category_status'] = $request->category_status;
        
        DB::Table('tbl_category')->where('category_id', $category_id)->update($data);
        Session::put('message','Edit category Success !!!');
        return Redirect::to('/admin/view-list-category');
    }

    public function delete_category($category_id){
        DB::Table('tbl_category')->where('category_id', $category_id)->delete();
        Session::put('message','Delete category Success !!!');
        return Redirect::to('/admin/view-list-category');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
