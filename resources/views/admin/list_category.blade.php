@extends('admin.adminindex')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List category
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
            <th>category Name</th>
            <th>category Description</th>
            <th>category Status</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_category as $key => $cou)
          <tr>
            <td>{{ $cou -> category_name }}</td>
            <td>{{ $cou -> category_des }}</td>
            <td><span class="text-ellipsis">
              <?php
              if($cou->category_status == 1){
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
              <a href="{{URL::to('/admin/edit-category/'.$cou->category_id)}}"
                  class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
            </td>
            <td>
                <a href="{{URL::to('/admin/delete-category/'.$cou->category_id )}}"
                class="active styling-edit" ui-toggle-class=""
                onclick="return confirm('Are you sure to delete category?')">
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