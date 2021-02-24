@extends('admin.adminindex')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List Course
    </div>
    <div class="table-responsive">
      <?php
        $message = Session::get('message');
        if($message){
          echo '<center><span class="text-alert">'.$message.'</span></center>';
          Session::put('Message',null);
        }
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Course Name</th>
            <th>Course Description</th>
            <th>Category Name</th>
            <th>Course Status</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_course as $key => $cou)
          <tr>
            <td>{{ $cou -> course_name }}</td>
            <td>{{ $cou -> course_des }}</td>
            <td>{{ $cou -> category_name }}</td>
            <td><span class="text-ellipsis">
              <?php
              if($cou->course_status == 1){
                ?>
                  <center><span class="fa-thumb-styling fa eye-slash"><h4>unhide</h4></span></center>
                <?php
              }
              else{
                ?>
                  <center><span class="fa-thumb-styling fa eye"><h4>hide</h4></span></center>
                <?php
              }
              ?>
            </span></td>
            <td>
              <a href="{{URL::to('/admin/edit-course/'.$cou->course_id)}}"
                  class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
            </td>
            <td>
                <a href="{{URL::to('/admin/delete-course/'.$cou->course_id )}}"
                class="active styling-edit" ui-toggle-class=""
                onclick="return confirm('Are you sure to delete Course?')">
                <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>  
          @endforeach       
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection