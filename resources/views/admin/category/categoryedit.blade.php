@extends('layout.layout')
@section("content")
<br>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
    <div class=" main-content-area">
        <div class="wrap-login-item ">						
            <div class="login-form form-item form-stl">
                <form method="POST" action="{{route('adminupdatecategory',["categoryid"=>$categoryinfo['id']])}}"  name="frm-login">
                    @csrf
                    
                    <fieldset class="wrap-input">
                        <label for="frm-login-uname">name</label>
                        <input type="text" id="frm-login-uname" name="name" placeholder="category name" value="{{$categoryinfo['name']}}">
                    </fieldset>
                    <fieldset class="wrap-input">
                        <label for="frm-login-pass">description:</label>
                        <input type="text" id="frm-login-pass" name="description" placeholder="category details" value="{{$categoryinfo['description']}}">
                    </fieldset>
                   
                   
                    <input type="submit" class="btn btn-submit" value="update" name="submit">
                </form>
            </div>												
        </div>
    </div><!--end main products area-->		
</div>
</div><!--end row-->
@endsection