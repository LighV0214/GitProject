@extends('admin.adminindex')
@section('admin_content')

<div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Create User
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
                            <form role="form" action="{{URL::to('/admin/create-user')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail">Email User</label>
                                <input type="email" name="user_email" class="form-control"
                                        id="exampleInputEmail" placeholder="Input Email User...">
                            </div>                            
                            <div class="form-group">
                                <label for="exampleInputPassword">Password User</label>
                                <input type="text" name="user_password" class="form-control"
                                        id="exampleInputPassword" value="123456">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFullname">Fullname User</label>
                                <input type="text" name="user_fullname" class="form-control"
                                        id="exampleInputFullname" placeholder="Input Fullname User...">
                            </div>
                            <div class="form-group">
                                <label for="examplePhone">Phone User</label>
                                <input type="text" name="user_phone" class="form-control"
                                        id="examplePhone" placeholder="Input Phone User..." maxlength="11">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputGender">Gender</label>
                                <select name="user_gender" class="form-control input-sm m-bot15" id="exampleInputGender">                                    
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleBirthday">Birthday User</label>
                                <input type="Date" name="user_birthday" class="form-control"
                                        id="exampleBirthday" placeholder="Input Fullname User...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputRole">Role User</label>
                                <select name="user_role" class="form-control input-sm m-bot15" id="exampleInputRole">                                    
                                    <option value="0">Admin</option>
                                    <option value="1">Student</option>
                                    <option value="2">Coordinator</option>
                                    <option value="3">Manager</option>
                                    <option value="4">Guest</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputImage">Image Product</label>
                                <input type="file" name="user_image" class="form-control" id="exampleInputImage"">
                            </div>
                            <center><button type="submit" name="create_user" class="btn btn-info">Create User</button></center>
                    </div>
                </section>
            </div>
        </div>

@endsection