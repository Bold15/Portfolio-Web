@extends('layout.master')
@section('container')

<!-- portfolio design -->
<section class="portfolio" id="portfolio">
    <h2 class="heading">My <span>Project</span></h2>

    <div class="portfolio-container">
        <div class="portfolio-box">
            <img src="{{ asset('images/port1.jpg') }}" alt="">
            <div class="portfolio-layer">
                <h4>Web Design</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>

        <div class="portfolio-box">
            <img src="{{ asset('images/port2.jpeg') }}" alt="">
            <div class="portfolio-layer">
                <h4>Web Design</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>

        <div class="portfolio-box">
            <img src="{{ asset('images/port3.jpg') }}" alt="">
            <div class="portfolio-layer">
                <h4>Web Design</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>

    </div>
</section>

@stop   