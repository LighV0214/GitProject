@extends('admin.adminindex')
@section('admin_content')

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Create Course
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
                            <form role="form" action="{{URL::to('/admin/create-course')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputCourse">Name Course</label>
                                <input type="text" name="course_name" class="form-control" id="exampleInputCourse" placeholder="Name Course...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDes">Description Course</label>
                                <textarea type="text" name="course_des" class="form-control" 
                                            id="exampleInputDes" placeholder="Description Course..."
                                            style="resize:none;" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCategory">Category Name</label>
                                <select name="category_id" class="form-control input-sm m-bot15" id="exampleInputCategory">
                                    @foreach($category as $key => $cate){
                                        <option value="{{$cate -> category_id}}">{{$cate -> category_name}}</option>
                                    }
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputStatus">Status</label>
                                <select name="course_status" class="form-control input-sm m-bot15" id="exampleInputStatus">
                                    <option value="1">Unhide</option>
                                    <option value="0">Hide</option>
                                </select>
                            </div>                                
                            <center><button type="submit" name="create_course" class="btn btn-info">Create Course</button></center>
                        </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>

@endsection