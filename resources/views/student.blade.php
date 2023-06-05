@extends('master.layout')
@section('content')

<!-- ======= Hero Section ======= -->
<div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">I am Mohd Khairul Azmi </h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
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
                      List of Student
                    </h5>
                  </div>

                    <table class="table table-striped table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Matric ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($student as $item)
                          <tr>
                            <th scope="row">{{ $item->matric_id }}</th>
                            <td>{{ $item->first_name }}</td>
                            <td>{{ $item->last_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone_no }}</td>
                          </tr>
                          @endforeach                       
                          <!-- <tr>
                            <th scope="row">1</th>
                            <td>Mohd Khairul Azmi</td>
                            <td>Hassan</td>
                            <td>mkazmi@iium.edu.my</td>
                            <td>019-2839481</td>
                          </tr> -->
                          <!-- <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>fat@gmail.com</td>
                            <td>0140224384</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>Bird</td>
                            <td>twitt@yahoo.com</td>
                            <td>0127359243</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Ibrahim</td>
                            <td>Saad</td>
                            <td>saad@yahoo.com</td>
                            <td>0127359243</td>
                          </tr> -->
                        </tbody>
                      </table>
                      <a class="btn btn-primary" href="/add-student">Add</a>

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
