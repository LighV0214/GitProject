@extends('admin.adminindex')
@section('admin_content')

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Course
                        <br>
                        <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">' .$message. '</span>';
                                Session::put('message', null);
                            }
                        ?>                      
                    </header>                    
                    <div class="panel-body">                        
                        <div class="position-center">
                        <p></p>
                            @foreach($edit_course as $key => $cou)
                            <form role="form" action="{{URL::to('/admin/update-course/'.$cou->course_id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputName">Course Name</label>
                                <input type="text" name="course_name" class="form-control" 
                                        id="exampleInputName" value="{{$cou->course_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDes">Course Description</label>
                                <textarea name="course_des" class="form-control" id="exampleInputDes" rows="5" >{{$cou->course_des}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCategory">Category Name</label>
                                <select name="category_id" class="form-control input-sm m-bot15" id="exampleInputCategory">
                                    @foreach($category as $key => $cate){
                                        @if($cate->category_id==$cou->category_id)
                                            <option selected value="{{$cate -> category_id}}">{{$cate -> category_name}}</option>
                                        @else
                                            <option value="{{$cate -> category_id}}">{{$cate -> category_name}}</option>
                                        @endif
                                    }
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputStatus">Course Status</label>
                                <select name="course_status" class="form-control input-sm m-bot15" id="exampleInputStatus">
                                    <option value="1">Unhide</option>
                                    <option value="0">Hide</option>
                                </select>
                            </div>
                            <center><button type="submit" name="edit_course" class="btn btn-info">Edit Course</button></center>
                        </form>
                        @endforeach
                        </div>

                    </div>
                </section>
            </div>
        </div>

@endsection