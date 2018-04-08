@extends('layouts.master')

@section('content')

  <!-- Header -->
    <header class="header" id="top">
      <div class="text-vertical-center">
        <h1>Our Portfolio</h1>
        <h3>Dhia Aziz  &amp; Rachmi Azanisa</h3>
        <br>
      </div>
    </header>


  <section id="portfolio" class = "bg-portfolio">
      <div class = "container">
        <div class = "row align-items-center">
        <div class="col-lg-10 text-vertical-center text-judul mx-auto">
          <h2>Portfolio</h2>
          </div>
          <div class = "col-lg-10 mx-auto">
              <div id="carouselExampleControls" class="carousel slide img-shadow" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{asset('/img/portfolio-1.jpg')}}" alt="First slide">
              <div class="carousel-caption d-none d-md-block bg-caption">
                <h5>Judul</h5>
                <p>Deskripsi</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('/img/portfolio-2.jpg')}}" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Judul</h5>
                <p>Deskripsi</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('/img/portfolio-3.jpg')}}" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Judul</h5>
                <p>Deskripsi</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
          </div>
        </div>
      </div>
  </section>


  <section id="skill" class"bg-skill">
    <div class="container">
      <div class ="row align-items-center">
        <div class="col=lg-10 text-vertical-center text-judul mx-auto">
          <h2>Skill</h2>
        </div>
        <div >

        </div>
      </div>
    </div>
  </section>



    <section id = "aboutus">
      <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-10 text-vertical-center text-judul mx-auto">
          <h2>About Us</h2>
          </div>
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="/img/aziz.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">Dhia Aziz Rizqy Arrahman</h2>
                  <h3>Work Experience</h3>
                    <lu>
                      <li>Back-end Developer in Sagara Technology</li>
                      <li>Front-end Developer in Mumtaaz Studio</li>
                    </lu>
            </div>
          </div>
        </div>
      </div>

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
                  <h3>Work Experience</h3>
                    <lu>
                      <li>Back-end Developer in PT.Nestyard Kreativa Gemilang</li>
                      <li>Vice Product in PT.Nestyard Kreativa Gemilang</li>
                      <li>Front-end Developer in BUKALAPAK</li>
                    </lu>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
    <div class="container">
      <div class ="row align-items-center">
        <div class="col=lg-10 text-vertical-center text-judul mx-auto">
          <h2>Contact</h2>
        </div>
      </div>
    </div>
  </section>

@endsection
