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
          <h1 class="hero-title mb-4">Module</h1>
          <!-- <p class="hero-subtitle"><span class="typed" data-typed-items="Purify Yourself, Preach Others"></span></p> -->
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Themes</h1>
                <ul class="list-group">
                    @forelse ($themes as $theme)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('assets/img/' . $theme->image) }}" alt="{{ $theme->name }}" style="max-width: 100px; max-height: 100px;">
                                </div>
                                <div class="col-md-9">
                                    <h4>{{ $theme->name }}</h4>
                                    <!-- Additional theme details can be displayed here -->
                                </div>
                            </div>
                        </li>
                    @empty
                        <li class="list-group-item">No themes available</li>
                    @endforelse
                </ul>
            </div>

            <div class="col-md-6">
                <h1>Games</h1>
                <ul class="list-group">
                    @forelse ($games as $game)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('assets/img/' . $game->image) }}" alt="{{ $game->name }}" style="max-width: 100px; max-height: 100px;">
                                </div>
                                <div class="col-md-9">
                                    <h4>{{ $game->name }}</h4>
                                    <!-- Additional game details can be displayed here -->
                                </div>
                            </div>
                        </li>
                    @empty
                        <li class="list-group-item">No games available</li>
                    @endforelse
                </ul>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Add Theme</h2>
                <form action="{{ route('themes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="themeName">Theme Name</label>
                        <input type="text" name="name" id="themeName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="themeImage">Theme Image</label>
                        <input type="file" name="image" id="themeImage" class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Theme</button>
                </form>
            </div>

            <div class="col-md-6">
                <h2>Add Game</h2>
                <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="gameName">Game Name</label>
                        <input type="text" name="name" id="gameName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gameImage">Game Image</label>
                        <input type="file" name="image" id="gameImage" class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Theme</button>
                </form> 
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
