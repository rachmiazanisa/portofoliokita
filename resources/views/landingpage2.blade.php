@extends('layouts.master')

@section('content')

  <!-- Header -->
    <header class="header" id="top">
      <div class="text-vertical-center">
        <h1>Our Portfolio</h1>
        <h3>Dhia Aziz  &amp; Rachmi Azanisa</h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg js-scroll-trigger">Find Out More</a>
      </div>
    </header>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="/img/aziz.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">Dhia Aziz Rizqy Arrahman</h2>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="/img/ami.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-5">
              <h2 class="display-4">Rachmi Azanisa Putri</h2>
              
            </div>
          </div>
        </div>
      </div>
    </section>



@endsection