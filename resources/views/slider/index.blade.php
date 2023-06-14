
@extends('master.layout')
@section('content')

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <img src="/assets/img/logo.png" alt="Logo" width="150"  style="border-radius: 50%;">
          <h1 class="hero-title mb-4">News</h1>
          <!-- <p class="hero-subtitle"><span class="typed" data-typed-items="Purify Yourself, Preach Others"></span></p> -->
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

<body>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8 ps-3 mb-3 p-0">
                                <h2>News</h2>
                            </div>
                            <div class="col-md-4 add-slider mb-3 p-0">
                                <a href="{{ route('slider.create') }}" class="btn btn-lg btn-primary float-end me-4" style="position: relative; top: 5px;"><i class="bi bi-person-plus"></i></a>
                            </div>

                        </div>
                    </div>

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($sliders as $slider)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div class="slider-image text-center">
                                        <img src="{{ asset('images/'.$slider->image) }}" class="d-inline-block border text-center rounded" alt="{{ $slider->image }}" style="width: 500px; height: 500px;">
                                        <div class="overlay" style="font-size: 24px;">{{ $slider->description }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="color: black; background-color: transparent; border: none;">
                            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="color: black; background-color: transparent; border: none;">
                            <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

@endsection