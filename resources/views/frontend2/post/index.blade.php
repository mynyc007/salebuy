@extends('frontend2.layouts.app')

@section('banner')
<div style="height:200px"></div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">


{{--  ============ Side search ==========================  --}}
            @include('frontend2.filter.car')

{{--  ============// Side search ==========================  --}}




{{--  ============ Main add==========================  --}}
            <div class="col-md-7" style="background:#c7c7ce">

                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row no-gutters">
                        <a href="{{route('frontend.show', 'id')}}">
                        <div class="col-md-6">
                                <!-- Carousel Card -->
                                <div class="card-img card-raised card-carousel">
                                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                    
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>

                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100 " src="{{asset('/')}}frontend/img/product01.jpg" alt="First slide">
                                      </div>

                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('/')}}frontend/img/product01.jpg" alt="Second slide">
                                      </div>

                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('/')}}frontend/img/product01.jpg" alt="Third slide">
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
                        </a>
                        
                        <div class="col-md-6">
                            <a href="{{route('frontend.show', 'id')}}">
                                <div class="card-body">

                                    <button class="btn btn-primary btn-fab btn-round float-right">
                                          <i class="material-icons">favorite</i> 
                                          <div class="ripple-container"></div>
                                    </button>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input name="navigation" class="form-check-input" type="checkbox" value="1"> Compare
                                            <span class="form-check-sign">
                                            <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>

                                    <h5 class="card-title">2019 Toyota Highlander Limited</h5>
                                   
                                        <ul class="list-group">
                                          <li> <h6>Ext. Color : Black</h6></li>
                                          <li><h6>Int. Color : Gray</h6></li>
                                          <li><h6>Transmission : Automatic</h6></li>
                                          <li><h6>Drivetrain : FWD</h6></li>
                                        </ul>

                                     <h6>name: Anderson | Call: 843545877</h6>
                                        {{--  --------------  --}}
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        5 (120 Review) | NYC
                                        {{--  --------------  --}}

                                        {{--  -------------  --}}
                                        <button class="btn btn-primary btn-round btn-sm">
                                          <i class="material-icons">phone</i> Call
                                        <div class="ripple-container"></div></button>
                                        {{--  -------------  --}}
                                        <button class="btn btn-primary btn-round btn-sm">
                                          <i class="material-icons">chat</i> Chat
                                        <div class="ripple-container"></div></button>
                                        {{--  -------------  --}}
                                        <button class="btn btn-primary btn-round btn-sm">
                                          <i class="material-icons">schedule</i> Book
                                        <div class="ripple-container"></div></button>
                                        {{--  -------------  --}}
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
                
                
                
                
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row no-gutters">

                        <div class="col-md-6">
                                <!-- Carousel Card -->
                                <div class="card-img card-raised card-carousel">
                                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                    
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>

                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100 " src="{{asset('/')}}frontend/img/product01.jpg" alt="First slide">
                                      </div>

                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('/')}}frontend/img/product01.jpg" alt="Second slide">
                                      </div>

                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('/')}}frontend/img/product01.jpg" alt="Third slide">
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

                        <div class="col-md-6">
                        <div class="card-body">
                                
                            <button class="btn btn-primary btn-fab btn-round float-right">
                                <i class="material-icons">favorite</i> 
                                <div class="ripple-container"></div>
                          </button>

                          <div class="form-check">
                              <label class="form-check-label">
                                  <input name="navigation" class="form-check-input" type="checkbox" value="1"> Compare
                                  <span class="form-check-sign">
                                  <span class="check"></span>
                                  </span>
                              </label>
                          </div>

                          <h5 class="card-title">2019 Toyota Highlander Limited</h5>
                         
                              <ul class="list-group">
                                <li> <h6>Ext. Color : Black</h6></li>
                                <li><h6>Int. Color : Gray</h6></li>
                                <li><h6>Transmission : Automatic</h6></li>
                                <li><h6>Drivetrain : FWD</h6></li>
                              </ul>

                           <h6>name: Anderson | Call: 843545877</h6>
                              {{--  --------------  --}}
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              5 (120 Review) | NYC
                              {{--  --------------  --}}

                              {{--  -------------  --}}
                              <button class="btn btn-primary btn-round btn-sm">
                                <i class="material-icons">phone</i> Call
                              <div class="ripple-container"></div></button>
                              {{--  -------------  --}}
                              <button class="btn btn-primary btn-round btn-sm">
                                <i class="material-icons">chat</i> Chat
                              <div class="ripple-container"></div></button>
                              {{--  -------------  --}}
                              <button class="btn btn-primary btn-round btn-sm">
                                <i class="material-icons">schedule</i> Book
                              <div class="ripple-container"></div></button>
                              {{--  -------------  --}}
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row no-gutters">

                        <div class="col-md-6">
                                <!-- Carousel Card -->
                                <div class="card-img card-raised card-carousel">
                                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                    
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>

                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100 " src="{{asset('/')}}frontend/img/product01.jpg" alt="First slide">
                                      </div>

                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('/')}}frontend/img/product01.jpg" alt="Second slide">
                                      </div>

                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('/')}}frontend/img/product01.jpg" alt="Third slide">
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

                        <div class="col-md-6">
                        <div class="card-body">

                            <button class="btn btn-primary btn-fab btn-round float-right">
                                <i class="material-icons">favorite</i> 
                                <div class="ripple-container"></div>
                          </button>

                          <div class="form-check">
                              <label class="form-check-label">
                                  <input name="navigation" class="form-check-input" type="checkbox" value="1"> Compare
                                  <span class="form-check-sign">
                                  <span class="check"></span>
                                  </span>
                              </label>
                          </div>

                          <h5 class="card-title">2019 Toyota Highlander Limited</h5>
                         
                              <ul class="list-group">
                                <li> <h6>Ext. Color : Black</h6></li>
                                <li><h6>Int. Color : Gray</h6></li>
                                <li><h6>Transmission : Automatic</h6></li>
                                <li><h6>Drivetrain : FWD</h6></li>
                              </ul>

                           <h6>name: Anderson | Call: 843545877</h6>
                              {{--  --------------  --}}
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              5 (120 Review) | NYC
                              {{--  --------------  --}}

                              {{--  -------------  --}}
                              <button class="btn btn-primary btn-round btn-sm">
                                <i class="material-icons">phone</i> Call
                              <div class="ripple-container"></div></button>
                              {{--  -------------  --}}
                              <button class="btn btn-primary btn-round btn-sm">
                                <i class="material-icons">chat</i> Chat
                              <div class="ripple-container"></div></button>
                              {{--  -------------  --}}
                              <button class="btn btn-primary btn-round btn-sm">
                                <i class="material-icons">schedule</i> Book
                              <div class="ripple-container"></div></button>
                              {{--  -------------  --}}
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>



            </div>
{{--  ============// Main adda==========================  --}}

            <div class="col-md-2" style="background:purple">

            </div>
        </div>
    </div>
@endsection