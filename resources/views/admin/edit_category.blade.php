@extends('admin.adminindex')
@section('admin_content')

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit category
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
                            @foreach($edit_category as $key => $cou)
                            <form role="form" action="{{URL::to('/admin/update-category/'.$cou->category_id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputName">category Name</label>
                                <input type="text" name="category_name" class="form-control" 
                                        id="exampleInputName" value="{{$cou->category_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDes">category Description</label>
                                <textarea name="category_des" class="form-control" id="exampleInputDes" rows="5" >{{$cou->category_des}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputStatus">category Status</label>
                                <select name="category_status" class="form-control input-sm m-bot15" id="exampleInputStatus">
                                    <option value="1">Unhide</option>
                                    <option value="0">Hide</option>
                                </select>
                            </div>
                            <center><button type="submit" name="edit_category" class="btn btn-info">Edit category</button></center>
                        </form>
                        @endforeach
                        </div>

                    </div>
                </section>
            </div>
        </div>

@endsection