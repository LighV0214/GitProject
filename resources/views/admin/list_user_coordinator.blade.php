@extends('admin.adminindex')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List Student
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
            <th>Image coordinator</th>
            <th>Id coordinator</th>
            <th>FullName coordinator</th>
            <th>Phone coordinator</th>
            <th>Gender coordinator</th>
            <th>Birthday coordinator</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_coordinator as $key => $coo)
          <tr>                       
            <td><img src="{{asset('public/uploads/avatar/'.$coo->user_image)}}" height="100" width="100"></td>
            <td>{{'GW'.($coo -> user_id) }}</td>
            <td>{{ $coo -> user_fullname }}</td>
            <td>{{ $coo -> user_phone }}</td>
            <td><span class="text-ellipsis">
              <?php
              if($coo->user_gender == 0){
                ?>
                  <center><span class="fa-thumb-styling fa fa-male"><h4>Male</h4></span></center>
                <?php
              }
              else{
                ?>
                  <center><span class="fa-thumb-styling fa fa-female"><h4>Female</h4></span></center>
                <?php
              }
              ?>
            </span></td>
            <td><span class="text-ellipsis">{{ $coo -> user_birthday }}</span></td>
            <td>
              <a href="{{URL::to('/admin/edit-user/'.$coo->user_id).$coo->user_role}}"
                  class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
            </td>
            <td>
                <a href="{{URL::to('/admin/delete-user/'.$coo->user_id )}}"
                class="active styling-edit" ui-toggle-class=""
                onclick="return confirm('Are you sure to delete user?')">
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