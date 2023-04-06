@extends('layouts.app')
@section('content')

<!-- Hero background & content on top of hero background -->
<div id="hero-container">
    <div class="hero-wrapper">
        <h1>Multi-Disciplinary <br> <span class="line">Designer</span> <span class="orange-txt">Developer</span></h1>

        <div class="btn-wrapper">
            <a href="">Let's connect</a>
            <a href="">View Portfolio</a>
        </div>
    </div>
</div>

<!-- 4 grid layout skills on homepage -->
<!-- Every div is a grid item -->
<div class="container-grid-4">
    <div>
        <img src="img/icon-box.jpg" alt="">
        <h2>
            Web Design
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur!
        </p>
    </div>

    <div>
        <img src="img/icon-box.jpg" alt="">
        <h2>
            Web Development
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur!
        </p>
    </div>

    <div>
        <img src="img/icon-box.jpg" alt="">
        <h2>
            Product Design
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur!
        </p>
    </div>

    <div>
        <img src="img/icon-box.jpg" alt="">
        <h2>
            Creative Thinker
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur!
        </p>
    </div>
</div>

<div class="header-section">
    <h2 class="dark big">Team</h2>

    <hr>
</div>

<!-- Meet the team section -->
<div class="container-grid-2">
    <div>
        <img class="img-team" src="img/team-section-home.jpg" alt="">
    </div>
    <div>
        <h2>
            Who we are
        </h2>

        <h3 class="orange-txt">
            Meet Our Team
        </h3>

        <p>
            Whether you require distribution or fulfillment, defined freight forwarding, or a complete supply chain solution, we are here for you.
        </p>

        <div class="btn-wrapper">
            <a href="">About</a>
        </div>
    </div>
</div>

<div class="header-section">
    <h2 class="dark big">Skills</h2>

    <hr>
</div>

<!-- Section of skills -->
<div class="section-why-us">
    <div>
        <i class="fas fa-code-branch icon-why-us"></i>
        <h2>
            Quality Control
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        </p>
    </div>

    <div class="middle">
        <img src="img/icon-box.jpg" alt="">
    </div>

    <div>
        <i class="far fa-keyboard icon-why-us"></i>
        <h2>
            Optional Maintenance
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        </p>
    </div>

    <div>
        <i class="fab fa-google icon-why-us"></i>
        <h2>
            Search Engine Friendly
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        </p>
    </div>

    <div>
        <i class="fas fa-globe icon-why-us"></i>
        <h2>
            Web Master Tools
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        </p>
    </div>
</div>

@endsection




{{--  
laravel blade control structures
@if ( 5 > 10)
    <p>5 is less than 10 </p>
@elseif (5 == 10)
    <p>5 is not equal 10</p>
@else
    <p>none of the above</p>
@endif

@unless(empty($name))
    <p>name is not  empty</p>
@endunless

@isset($name)
    <p>name has been set</p>
@endisset  --}}




{{--  comparing multiple possible solutions
or multiple values that may require the same code

@switch($name)
    @case('John,')
        <p>name is John</p>
        @break
    @case('Angela,')
        <p>name is Angela</p>
        @break
    @case('Happy,')
        <p>name is Happy</p>
        @break

    @default
        <p>no name matched</p>
        
@endswitch  --}}




{{-- loops

 @for ($i=0; $i<=10; $i++)
    <p>the number is {{ $i }}</p>
@endfor


@foreach( $names as $name)
    <p>the name is {{ $name }}</p>
@endforeach

@forelse ($names as $name)
    <p>the name is {{ $name }}</p>
@empty
    <p>the names are non existent</p>
@endforelse

{{ $i=0 }}
@while ($i<10)
    <p>{{ $i }}</p>
    <p>{{ $i++ }}</p>
@endwhile  --}}

