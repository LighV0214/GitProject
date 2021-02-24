@extends('index')
@section('content')
<form>
    <div class="container">
        <div class="row">
            <div class="submit">
                <h2>Submission</h2>
                <form class="needs-validation" novalidate>
            
            
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationCustom01">First name</label>
                <input type="text" class="form-control" id="validationCustom01"  required>
            </div>
                
                
                <div class="col-md-6 mb-3">
                <label for="validationCustom02">Last name</label>
                <input type="text" class="form-control" id="validationCustom02"  required>
                </div>
            
            
                <div class="col-lg-12 mb-3">
                <label for="validationServerUsername">Email</label>
                <div class="input-group">
                <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" value="StudentID" required>
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">@fpt.edu.vn</span>
                    </div>
                    <div class="invalid-feedback">
                    Please choose a email
                    </div>
                </div>
            </div>
                
                
                <div class="col-lg-12">
                <label for="validationTextarea">Content</label>
                <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Input content" required></textarea>
                <div class="invalid-feedback">
                Please enter Content and Department
                </div>
                <div class="input-group mb-3">
            
            
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit </button>
                </form>  
                </div> 
            </div>
        </form>
        </div>
@endsection