@extends('admin.adminindex')
@section('admin_content')

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit User
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
                            @foreach($edit_user as $key => $user)
                            <form role="form" action="{{URL::to('/admin/update-user/'.$user->user_id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputName">Fullname User</label>
                                <input type="text" name="user_fullname" class="form-control" 
                                        id="exampleInputName" value="{{$user->user_fullname}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhone">Phone User</label>
                                <input type="text" name="user_phone" class="form-control" maxlenght="11"
                                        id="exampleInputPhone" value="{{$user->user_phone}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputBirthday">Birthday User</label>
                                <input type="DATE" name="user_birthday" class="form-control" 
                                        id="exampleInputBirthday" value="{{$user->user_birthday}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputGender">Gender User</label>
                                <select name="user_gender" class="form-control input-sm m-bot15" id="exampleInputGender">
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputRole">Role User</label>
                                <select name="user_role" class="form-control input-sm m-bot15" id="exampleInputRole">
                                <?php
									$user_role = Session::get('user_role');
									if($user_role == 0){
								?>                                        
                                    <option value="0">Admin</option>
                                    <option value="1">Student</option>
                                    <option value="2">Coordinator</option>
                                    <option value="3">Manager</option>
                                    <option value="4">Guest</option>
                                <?php
                                    }else if ($user_role == 1) {
                                ?>                                    
                                    <option value="1">Student</option>
                                    <option value="0">Admin</option>
                                    <option value="2">Coordinator</option>
                                    <option value="3">Manager</option>
                                    <option value="4">Guest</option>
                                <?php
                                    }else if ($user_role == 2) {
                                ?>
                                    <option value="2">Coordinator</option>
                                    <option value="0">Admin</option>
                                    <option value="1">Student</option>                                    
                                    <option value="3">Manager</option>
                                    <option value="4">Guest</option>
                                <?php
                                    }else if ($user_role == 3) {
                                ?>
                                    <option value="3">Manager</option>
                                    <option value="0">Admin</option>
                                    <option value="1">Student</option>
                                    <option value="2">Coordinator</option>                                    
                                    <option value="4">Guest</option>
                                <?php
                                    }else{
                                ?>
                                    <option value="4">Guest</option>
                                    <option value="0">Admin</option>
                                    <option value="1">Student</option>
                                    <option value="2">Coordinator</option>
                                    <option value="3">Manager</option>
                                </select>
                                <?php
                                    }
                                ?>
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputImage">Image User</label>
                                <input type="file" name="user_image" class="form-control" id="exampleInputImage"">
                                <label for="exampleInputImage"><img src="{{URL::to('public/uploads/avatar/'.$user->user_image)}}" alt="User Image" 
                                        height="200" witdh="200" boder="20px" id="borderimg"></label>
                                
                            </div>                         
                            <center><button type="submit" name="create_user" class="btn btn-info">Edit User</button></center>
                        </form>
                        @endforeach
                        </div>

                    </div>
                </section>
            </div>
        </div>

@endsection