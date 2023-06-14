@extends('master.layout')
@section('content')
<head>

</head>
  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <img src="/assets/img/logo.png" alt="Logo" width="150"  style="border-radius: 50%;">
          <h1 class="hero-title mb-4">Welcome to STEADFAST IIUM</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Purify Yourself, Preach Others"></span></p>
          <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <div class="container">
    <h1>Recruitment</h1>
    <form action="{{ route('recruitment.store') }}" method="post" role="form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="matric_id">Matric ID</label>
            <input type="text" class="form-control" id="matric_id" name="matric_id" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="kulliyah">Kulliyah</label>
            <input type="text" class="form-control" id="kulliyah" name="kulliyah" required>
        </div>
        <div class="form-group">
            <label for="year_of_study">Year of Study</label>
            <input type="number" class="form-control" id="year_of_study" name="year_of_study" required>
        </div>
        <div class="form-group">
            <label for="reason_to_join">Reason to Join</label>
            <textarea class="form-control" id="reason_to_join" name="reason_to_join" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
