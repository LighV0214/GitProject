@extends('index')
@section('content')
    <div class="container">
        <div class="sidenav"></div>
        <div class="bg-text">
            <h1>Greenwich Education</h1>
            <h3>Login</h3>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="alert alert-warning" style="bottom: 20px;">' ,$message, '</span>';
                            Session::put('message',null);
                        }
                    ?>
                    <form action="{{URL::to('/loginsuccess')}}" method="post"> 
                        @csrf               
                        <div class="form-group">
                            <label for="coordinator_email">Email</label>
                            <input type="email" name="coordinator_email" class="form-control" placeholder="Email..." id="coordinator_email">
                        </div>
                        <div class="form-group">
                            <label for="coordinator_password">Password</label>
                            <input type="password" name="coordinator_password" class="form-control" placeholder="Password..." id="coordinator_password">                        
                        </div>
                        <div class="form-group" style="left: 5px;">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label for="defaultCheck1">
                                Remember me
                            </label>
                        </div>
                        <center><input class="btn button primary-button" type="submit" value="Log In" name="login"></center>
                        <br>
                        <a href="#">Forgeting password?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection