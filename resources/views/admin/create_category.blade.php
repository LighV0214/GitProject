@extends('admin.adminindex')
@section('admin_content')

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Create Category
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
                            <form role="form" action="{{URL::to('/admin/create-category')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputcategory">Name Category</label>
                                <input type="text" name="category_name" class="form-control" id="exampleInputcategory" placeholder="Name category...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDes">Description category</label>
                                <textarea type="text" name="category_des" class="form-control" 
                                            id="exampleInputDes" placeholder="Description category..."
                                            style="resize:none;" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputStatus">Status</label>
                                <select name="category_status" class="form-control input-sm m-bot15" id="exampleInputStatus">
                                    <option value="1">Unhide</option>
                                    <option value="0">Hide</option>
                                </select>
                            </div>                                
                            <center><button type="submit" name="create_category" class="btn btn-info">Create category</button></center>
                        </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>

@endsection