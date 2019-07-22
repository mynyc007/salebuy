<div class="col-md-4 section">

        <!-- Tabs on Plain Card -->
        <div class="row left-box">

          <div class="col-md-6">
            <ul class="nav nav-pills nav-pills-icons flex-column" >
              <!--
            color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                              -->
              <li class="nav-item">
                <a class="nav-link active show" href="{{route('frontend.all','car')}}" role="tab"  aria-selected="true">
                  <i class="fa fa-car" aria-hidden="true"></i> Buy Car
                </a>
              </li>
              <li class="nav-item material-icons">
                <a class="nav-link active " href="{{route('frontend.all','car')}}" role="tab"  aria-selected="false">
                    <img src="{{asset('/')}}frontend/carbody/rickshaw.svg" alt="" height="60"> <br> buy rickshaw
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('frontend.all','car')}}" role="tab"  aria-selected="false">
                  <i class="fa fa-ship " aria-hidden="true"></i> buy boat
                </a>
              </li>
            </ul>
          </div>



          <div class="col-md-6 left">
            <ul class="nav nav-pills nav-pills-icons flex-column" >
              <!--
            color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                              -->
              <li class="nav-item">
                <a class="nav-link active show" href="{{route('frontend.all','car')}}" role="tab"  aria-selected="true">
                  <i class="fa fa-motorcycle" aria-hidden="true"></i> Buy Bike
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('frontend.all','car')}}" role="tab"  aria-selected="false">
                  <i class="fa fa-bicycle" aria-hidden="true"></i> buy bicycle
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('frontend.all','car')}}" role="tab"  aria-selected="false">
                  <i class="fa fa-plane    "></i> buy aircraft
                </a>
              </li>
            </ul>
          </div>

          
        </div>
        <!-- End Tabs on plain Card -->
      </div>
    