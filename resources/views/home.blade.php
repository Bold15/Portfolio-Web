@extends('layout.master')
@section('container')

<!-- home design -->
<section class="home" id="home">
    <div class="home-content">
        <h3>Hello, I'm Alex</h3>
        <h1>Alexander Oktaviyanto</h1>
        <h3>And I'm a <span>Web Developer</span></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo recusandae mollitia eveniet provident quia ex optio cupiditate, saepe voluptatibus, natus architecto possimus dolorum odio numquam, quas est. Impedit, ad natus?</p>
        <div class="social-media">
            <a href="https://www.instagram.com/alexander_oktaviyanto/"><i class='bx bxl-instagram-alt' ></i></a>
            <a href="https://wa.me/+628115280035"><i class='bx bxl-whatsapp-square' ></i></a>
        </div>
    </div>

    <div class="home-img">
        <img src="{{ asset('images/kaitokid.png') }}" alt="">
    </div>
</section>

@stop   