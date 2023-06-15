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



<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-12">

<div class="title-box-2">
    <h5 class="title-left">
      Modules
    </h5>
  </div><div class="container">
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
                                <p>Theme: {{ $game->theme->name }}</p>
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
            <form action="{{ route('theme.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="theme-name">Theme Name:</label>
                    <input type="text" name="name" id="theme-name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="theme-image">Theme Image:</label>
                    <input type="file" name="image" id="theme-image" class="form-control-file" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Theme</button>
            </form>
        </div>

        <div class="col-md-6">
            <h2>Add Game</h2>
            <form action="{{ route('game.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="game-name">Game Name:</label>
                    <input type="text" name="name" id="game-name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="game-image">Game Image:</label>
                    <input type="file" name="image" id="game-image" class="form-control-file" required>
                </div><div class="form-group">
                    <label for="game-theme">Game Theme:</label>
                    <select name="theme_id" id="game-theme" class="form-control" required>
                        @foreach ($themes as $theme)
                            <option value="{{ $theme->id }}">{{ $theme->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Game</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section><!-- End Contact Section -->
@endsection
