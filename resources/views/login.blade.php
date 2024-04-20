@extends('layout.master')
@section('container')

<div class="container" style="margin-top: 70px; height: 60vh; display: flex; justify-content: center; align-items: center; color: white;">

    <div class="col-md-4"> 
        <form action="{{url('/authenticate')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('/signin')}}" class="signin-btn">Sign In</a>
        </form>
    </div>
</div>

@stop