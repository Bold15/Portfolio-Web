@extends('layout.master')
@section('container')

@if(Auth::check())
<section class="comment" id="comment">
    <h2 class="heading">Edit <span>Comment!</span></h2>

    <form action="{{ route('comment.update', $comment->id) }}" method="POST">
    @method('put')
    @csrf
    <div class="input-box">
        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Comment" required autofocus>{{ old('comment', $comment->comment) }}</textarea>
    </div>
    <input type="submit" class="btn" style="float: right">
</form>

</section>
@endif

@stop
