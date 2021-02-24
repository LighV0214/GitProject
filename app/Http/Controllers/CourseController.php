<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view_create_course(){
        $category = DB::table('tbl_category')->orderby('category_name','asc')->get();

        return view('admin.create_course')->with('category', $category);
    }

    public function create_course(Request $request)
    {
        //insert product
        $data = array();
        $data['course_name'] = $request->course_name;
        $data['course_des'] = $request->course_des;
        $data['category_id'] = $request->category_id;
        $data['course_status'] = $request->course_status;
        
        DB::Table('tbl_course')->insert($data);
        Session::put('message','Insert Course Success !!!');
        return redirect('/admin/view-create-course');
    }

    public function view_list_course()
    {
        //Show all list
        $all_course = DB::Table('tbl_course')
                        ->join('tbl_category','tbl_category.category_id','=','tbl_course.category_id')
                        ->orderby('course_id','desc')->get();
        
        return view('admin.list_course')->with('all_course',$all_course);
    }

    public function edit_course($course_id)
    {
        $category = DB::table('tbl_category')->orderby('category_name','asc')->get();

        $edit_course = DB::Table('tbl_course')->where('course_id', $course_id)->get();
        $manager_course = view('admin.edit_course')->with('edit_course', $edit_course)
                            ->with('category', $category);

        return view('admin.adminindex')->with('admin.edit_course',$manager_course);
    }

    public function update_course(Request $request, $course_id)
    {
        //insert product
        $data = array();
        $data['course_name'] = $request->course_name;
        $data['course_des'] = $request->course_des;        
        $data['course_status'] = $request->course_status;
        
        DB::Table('tbl_course')->where('course_id', $course_id)->update($data);
        Session::put('message','Edit Course Success !!!');
        return Redirect::to('/admin/view-list-course');
    }

    public function delete_course($course_id){
        DB::Table('tbl_course')->where('course_id', $course_id)->delete();
        Session::put('message','Delete Course Success !!!');
        return Redirect::to('/admin/view-list-course');
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
