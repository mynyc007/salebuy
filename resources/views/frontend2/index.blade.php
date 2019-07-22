@extends('frontend2.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('banner')
<div class="container">
    <div class="row">

      <!-- search-box -->
          @include('frontend2.includes.box-menu')
      <!--// search-box -->




      <div class="col-md-6 section">
                    <!--         carousel  -->
          <div class="" id="carousel">
              <div class="container">
                <div class="row">
                  <div class=" mr-auto ml-auto">
                    <!-- Carousel Card -->
                    <div class="card card-raised card-carousel">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}frontend/img/bg2.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                              <h4>
                                <i class="material-icons">location_on</i> Yellowstone National Park, United States
                              </h4>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}frontend/img/bg3.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                              <h4>
                                <i class="material-icons">location_on</i> Somewhere Beyond, United States
                              </h4>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}frontend/img/bg.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                              <h4>
                                <i class="material-icons">location_on</i> Yellowstone National Park, United States
                              </h4>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <i class="material-icons">keyboard_arrow_left</i>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                    <!-- End Carousel Card -->
                  </div>
                </div>
              </div>
            </div>
            <!--         end carousel -->
            {{--  ======shop box under slider=========  --}}
           <div class="row under">

               <div class="col-md-4 right">
                  <a href="#">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="{{asset('/')}}frontend/img/shop02.png" alt="" height="148">
                        </div>
                        <div class="shop-body">
                            <h3>Car<br>Service</h3>
                        </div>
                    </div>
                  </a>
               </div>
               <div class="col-md-4 right">
                  <a href="#">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="http://localhost/carsaler/public/new/./img/shop03.png" alt="" height="148">
                        </div>
                        <div class="shop-body">
                            <h3>Accessories</h3>
                        </div>
                    </div>
                  </a>
               </div>

               <div class="col-md-4 right">
                  <a href="#">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="http://localhost/carsaler/public/new/./img/shop01.png" alt="" height="148">
                        </div>
                        <div class="shop-body">
                            <h3>Car<br>Rental</h3>
                        </div>
                    </div>
                  </a>
               </div>
           </div>
            {{--  =====//=shop box under slider=========  --}}


          </div><!---col-md-6--->

            {{--  <!-- side dbox right -->  --}}
            <div class="col-md-2 section shop-md-2">
                <a href="http://">
                  <div class="shop">
                      <div class="shop-img">
                          <img src="http://localhost/carsaler/public/new/./img/shop01.png" alt="" height="148">
                      </div>
                      <div class="shop-body">
                          <h3>Traffic<br>Update</h3>
                      </div>
                  </div>
                </a>
                <a href="#">
                  <div class="shop">
                      <div class="shop-img">
                          <img src="http://localhost/carsaler/public/new/./img/shop01.png" alt="" height="148">
                      </div>
                      <div class="shop-body">
                          <h3>Hire<br>a Driver</h3>
                      </div>
                  </div>
                </a>

                <a href="#">
                  <div class="shop">
                      <div class="shop-img">
                          <img src="http://localhost/carsaler/public/new/./img/shop01.png" alt="" height="148">
                      </div>
                      <div class="shop-body">
                          <h3>Hire<br>a Car</h3>
                      </div>
                  </div>
                </a>
             </div>
           <!--// side dbox right-->
      </div> <!---row --->

       

    </div>
    
@endsection

@section('content')

  {{--  </div>  --}}



     {{--  ========main-content================  --}}
          @include('frontend2.includes.main-content')
     {{--  ========//main-content================  --}}
    </div>
  </div>


  <!-- Classic Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link">Nice Button</button>
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--  End Modal -->
@endsection
