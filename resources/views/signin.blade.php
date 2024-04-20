<!-- resources/views/register.blade.php -->

@extends('layout.master')

@section('container')
<div class="container" style="margin-top: 70px; height: 60vh; display: flex; justify-content: center; align-items: center; color: white;">
    <div class="col-md-4"> 
        <form action="{{ url('signin') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="{{url('login')}}" class="login-btn">Log in</a>
        </form>
    </div>
</div>
@stop
