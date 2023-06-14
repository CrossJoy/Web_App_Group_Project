
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
          <h1 class="hero-title mb-4">Event</h1>
          <!-- <p class="hero-subtitle"><span class="typed" data-typed-items="Purify Yourself, Preach Others"></span></p> -->
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <body>

<section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Event
            </h3>
            <p class="subtitle-a">
              This is our event section. These are the photos of our recent events.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>

      <div class="row">
  @foreach ($event as $event)
    <div class="col-md-4">
      <div class="work-box">
        <a href="{{  asset('images/'.$event->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
          <div class="work-img">
            <img src="{{  asset('images/'.$event->image) }}" alt="" class="img-fluid">
          </div>
        </a>
        <div class="work-content">
          <div class="row">
            <div class="col-sm-8">
              <h2 class="w-title">{{ $event->event_name }}</h2>
              <div class="w-more">
                <span class="w-ctegory">{{ $event->venue }}</span> / <span class="w-date">{{ $event->date }}</span>
                <p class="card-text">- {{ $event->members }} members joined</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="w-like">
                <!-- Add like button here if needed -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  <a class="button button-a button-big button-rouded" href="{{ route('event.create') }}">Add</a>
</div>

      <!-- <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="assets/img/steadfastEventImage1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
              <div class="work-img">
                <img src="assets/img/steadfastEventImage1.jpg" alt="" class="img-fluid">
              </div>
            </a>
            <div class="work-content">
              <div class="row">
                <div class="col-sm-8">
                  <h2 class="w-title">Ohana Night</h2>
                  <div class="w-more">
                    <span class="w-ctegory">International Islamic University Malaysia</span> / <span class="w-date">12 Oct. 2019</span>
                    <p class="card-text">- 30 members joined</p>
                    <p class="card-text">- 8pm to 11pm</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="w-like">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="assets/img/steadfastEventImage2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
              <div class="work-img">
                <img src="assets/img/steadfastEventImage2.jpg" alt="" class="img-fluid">
              </div>
            </a>
            <div class="work-content">
              <div class="row">
                <div class="col-sm-8">
                  <h2 class="w-title">Steadfast Recruitment</h2>
                  <div class="w-more">
                    <span class="w-ctegory">International Islamic University Malaysia</span> / <span class="w-date">24-26 Sep. 2019</span>
                    <p class="card-text">- Recruitment of new members</p>
                    <p class="card-text">- 8.30pm to 10pm</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="assets/img/steadfastEventImage3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
              <div class="work-img">
                <img src="assets/img/steadfastEventImage3.jpg" alt="" class="img-fluid">
              </div>
            </a>
            <div class="work-content">
              <div class="row">
                <div class="col-sm-8">
                  <h2 class="w-title">Schoject 1.0</h2>
                  <div class="w-more">
                    <span class="w-ctegory">SK Sungai Buaya</span> / <span class="w-date">22-23 Feb. 2019</span>
                    <p class="card-text">- 25 members joined</p>
                    <p class="card-text">- 54 students joined</p>
                    <p class="card-text">- 9am to 6pm</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="assets/img/steadfastEventImage4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
              <div class="work-img">
                <img src="assets/img/steadfastEventImage4.jpg" alt="" class="img-fluid">
              </div>
            </a>
            <div class="work-content">
              <div class="row">
                <div class="col-sm-8">
                  <h2 class="w-title">MC League </h2>
                  <div class="w-more">
                    <span class="w-ctegory">International Islamic University Malaysia</span> / <span class="w-date">28 Apr. 2018</span>
                    <p class="card-text">- 43 members joined</p>
                    <p class="card-text">- at AUDI B, KOE</p>
                    <p class="card-text">- 9am to 6pm</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="assets/img/steadfastEventImage5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
              <div class="work-img">
                <img src="assets/img/steadfastEventImage5.jpg" alt="" class="img-fluid">
              </div>
            </a>
            <div class="work-content">
              <div class="row">
                <div class="col-sm-8">
                  <h2 class="w-title">Schoject 3.0</h2>
                  <div class="w-more">
                    <span class="w-ctegory">SK Seksyen 27</span> / <span class="w-date">23-24 Mar. 2018</span>
                    <p class="card-text">- 25 members joined</p>
                    <p class="card-text">- 85 students joined</p>
                    <p class="card-text">- Games played are Tic Tac Toe, Just Do It, Sketch It Out and Potret Diri</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="assets/img/steadfastEventImage6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
              <div class="work-img">
                <img src="assets/img/steadfastEventImage6.jpg" alt="" class="img-fluid">
              </div>
            </a>
            <div class="work-content">
              <div class="row">
                <div class="col-sm-8">
                  <h2 class="w-title">Steadfast Sunshine Programme</h2>
                  <div class="w-more">
                    <span class="w-ctegory">Hospital Selayang</span> / <span class="w-date">30 May. 2016</span>
                    <p class="card-text">- 20 members joined</p>
                    <p class="card-text">- 9am to 6pm</p>

                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>

      </div>
      
    </div>
  </section>


                    </tbody>
@endsection