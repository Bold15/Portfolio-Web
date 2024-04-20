@extends('layout.master')
@section('container')

@if(Auth::check())
<section class="comment" id="comment">
    <h2 class="heading">Leave <span>Comment!</span></h2>

    <form action="{{ url('/postcomment') }}" method="POST">
    @csrf
        <div class="input-box">
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Comment"></textarea>
        </div>
        <input type="submit" class="btn" style="float: right">
    </form>
    <hr>

    @foreach($data as $key => $value)
    <div>
        <h3>{{$value->name}}</h3>
        <h6>{{$value->time}}</h6>
        <p>{{$value->comment}}</p>
        @if(Auth::check() && $value->email == Auth::user()->email)
        <a href="{{ url('comment/' . $value->id . '/edit') }}" class="btn-edit">Edit</a>  
        <form action="{{ route('comment.destroy', $value->id) }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="button-delete" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
            
        @endif
    </div>
    @endforeach
</section>

@else
<h2 class="heading-comment">Log In for <span>Comment!</span></h2>
<div class="comment-no-login">
        @foreach($data as $key => $value)
        <h3>{{$value->name}}</h3>
        <h6>{{$value->time}}</h6>
        <p>{{$value->comment}}</p>
        @endforeach
    </div>

@endif

@stop
