<div class="col-md-4 section">

        <!-- Tabs on Plain Card -->
        <div class="card card-nav-tabs card-plain ">
            <div class="card-header card-header-primary">
              <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#car" data-toggle="tab"> <i class="fa fa-car" aria-hidden="true"></i> Car</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#bike" data-toggle="tab"> <i class="fa fa-motorcycle"></i> Bike</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#rickshaw" data-toggle="tab"> <img  src="{{asset('/')}}frontend/carbody/rickshaw.svg" alt="" height="15"> Rickshaw</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#bicycle" data-toggle="tab"> <i class="fa fa-bicycle"></i> Bicycle</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body ">
              <div class="tab-content text-center">



            
                 <!-- ==========car Tab====================== -->
                 <div class="tab-pane  active" id="car">
                   <i class="fa fa-car" aria-hidden="true"></i>
                    <form action="" method="post">

                          <!-- ============Location================== -->
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group ">
                                <label for="">State</label>
                                <select name="state" id="my-input" class="form-control">
                                  <option value="">Select State</option>
                                  <option value="">Dhaka</option>
                                  <option>Chitagong</option>
                                  <option>Sylhet</option>
                                  <option>Borishal</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="">City</label>
                                <select name="state" id="my-input" class="form-control">
                                  <option value="">Select City</option>
                                  <option value="">Dhaka</option>
                                  <option>Chitagong</option>
                                  <option>Sylhet</option>
                                  <option>Borishal</option>
                                </select>
                                </div>
                            </div>
                          </div>
                          <!-- ===========//=Location================== -->
                          <!-- ============new used, gear type================== -->
                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Condition</label>
                                    <div class="form-check">
                                      
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="transmission" id="" value="1" >New
                                        <span class="circle">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                      
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="transmission" id="" value="0">Used
                                        <span class="circle">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="">Transmission</label>
                                  <div class="form-check">
                                   
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="radio" name="transmission" id="" value="1" >Auto
                                      <span class="circle">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                    
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="radio" name="transmission" id="" value="0">Menual
                                      <span class="circle">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                            </div>
                            </div>
                          <!-- ===========//=new used, gear type================== -->
                          <!-- ============Year================== -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="my-input">Year to</label>
                                  <select id="my-input" class="form-control">
                                    <option>All</option>
                                    <option>2019</option>
                                    <option>2019</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="my-input">Year</label>
                                  <select id="my-input" class="form-control">
                                    <option>Any</option>
                                    <option>2019</option>
                                    <option>2019</option>
                                  </select>
                                </div>
                            </div>
                          </div>
                          <!-- ===========//=Year================== -->
                          <!-- ============Price================== -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="my-input">Max Price</label>
                                  <select id="my-input" class="form-control">
                                    <option>All</option>
                                    <option>2019</option>
                                    <option>2019</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="my-input">Max Mileage</label>
                                  <select id="my-input" class="form-control">
                                    <option>Any</option>
                                    <option>2019</option>
                                    <option>2019</option>
                                  </select>
                                </div>
                            </div>
                          </div>
                          <!-- ===========//=Price================== -->
                          <div class="form-group">
                              <button class="btn btn-primary btn-sm" type="submit">Search</button>
                          </div>
                    </form>
                </div>
              <!-- =========//=car Tab====================== -->





                <!-- =========Bike Tab=============== -->
                <div class="tab-pane" id="bike">
                    <i class="fa fa-motorcycle"></i>
                    <form action="" method="post">

                        <!-- ============Location================== -->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="">State</label>
                              <select name="state" id="my-input" class="form-control">
                                <option value="">Dhaka</option>
                                <option>Chitagong</option>
                                <option>Sylhet</option>
                                <option>Borishal</option>
                              </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="">City</label>
                              <select name="state" id="my-input" class="form-control">
                                <option value="">Dhaka</option>
                                <option>Chitagong</option>
                                <option>Sylhet</option>
                                <option>Borishal</option>
                              </select>
                              </div>
                          </div>
                        </div>
                        <!-- ===========//=Location================== -->

                        <!-- ============new used, gear type================== -->
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Condition</label>
                                  <div class="form-check">
                                    
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="radio" name="transmission" id="" value="1" >New
                                      <span class="circle">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                    
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="radio" name="transmission" id="" value="0">Used
                                      <span class="circle">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Engine</label>
                                <div class="form-check">
                                 
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="transmission" id="" value="1" >Electric
                                    <span class="circle">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                  
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="transmission" id="" value="0">Non Electric
                                    <span class="circle">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </div>
                          </div>
                          </div>
                        <!-- ===========//=new used, gear type================== -->

                        <!-- ============Year================== -->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="my-input">Year to</label>
                                <select id="my-input" class="form-control">
                                  <option>All</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="my-input">Year</label>
                                <select id="my-input" class="form-control">
                                  <option>Any</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                        </div>
                        <!-- ===========//=Year================== -->
                        
                        
                        <!-- ============Price================== -->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="my-input">Max Price</label>
                                <select id="my-input" class="form-control">
                                  <option>All</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="my-input">Max Mileage</label>
                                <select id="my-input" class="form-control">
                                  <option>Any</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                        </div>
                        <!-- ===========//=Price================== -->
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Search</button>
                        </div>
                  </form>
                </div>
                <!-- =========//Bike Tab=============== -->






                <!-- =========Rickshaw Tab=============== -->
                <div class="tab-pane" id="rickshaw">
                    <img src="{{asset('/')}}frontend/carbody/rickshaw.svg" alt="" height="50">
                    <form action="" method="post">

                        <!-- ============Location================== -->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="">State</label>
                              <select name="state" id="my-input" class="form-control">
                                <option value="">Dhaka</option>
                                <option>Chitagong</option>
                                <option>Sylhet</option>
                                <option>Borishal</option>
                              </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="">City</label>
                              <select name="state" id="my-input" class="form-control">
                                <option value="">Dhaka</option>
                                <option>Chitagong</option>
                                <option>Sylhet</option>
                                <option>Borishal</option>
                              </select>
                              </div>
                          </div>
                        </div>
                        <!-- ===========//=Location================== -->

                        <!-- ============new used, gear type================== -->
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Condition</label>
                                  <div class="form-check">
                                    
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="radio" name="transmission" id="" value="1" >New
                                      <span class="circle">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                    
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="radio" name="transmission" id="" value="0">Used
                                      <span class="circle">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Engine</label>
                                <div class="form-check">
                                 
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="transmission" id="" value="1" >Electric
                                    <span class="circle">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                  
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="transmission" id="" value="0">Non Electric
                                    <span class="circle">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </div>
                          </div>
                          </div>
                        <!-- ===========//=new used, gear type================== -->

                        <!-- ============Year================== -->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="my-input">Year to</label>
                                <select id="my-input" class="form-control">
                                  <option>All</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="my-input">Year</label>
                                <select id="my-input" class="form-control">
                                  <option>Any</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                        </div>
                        <!-- ===========//=Year================== -->
                        
                        
                        <!-- ============Price================== -->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="my-input">Max Price</label>
                                <select id="my-input" class="form-control">
                                  <option>All</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="my-input">Max Mileage</label>
                                <select id="my-input" class="form-control">
                                  <option>Any</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                        </div>
                        <!-- ===========//=Price================== -->
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Search</button>
                        </div>
                  </form>
                </div>
                <!-- =========//Rickshaw Tab=============== -->








                <!-- =========Bicycle Tab=============== -->
                <div class="tab-pane" id="bicycle">
                    <i class="fa fa-bicycle" aria-hidden="true"></i>
                    <form action="" method="post">

                        <!-- ============Location================== -->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="">State</label>
                              <select name="state" id="my-input" class="form-control">
                                <option value="">Dhaka</option>
                                <option>Chitagong</option>
                                <option>Sylhet</option>
                                <option>Borishal</option>
                              </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="">City</label>
                              <select name="state" id="my-input" class="form-control">
                                <option value="">Dhaka</option>
                                <option>Chitagong</option>
                                <option>Sylhet</option>
                                <option>Borishal</option>
                              </select>
                              </div>
                          </div>
                        </div>
                        <!-- ===========//=Location================== -->

                        <!-- ============new used, gear type================== -->
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Condition</label>
                                  <div class="form-check">
                                    
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="radio" name="transmission" id="" value="1" >New
                                      <span class="circle">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                    
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="radio" name="transmission" id="" value="0">Used
                                      <span class="circle">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Engine</label>
                                <div class="form-check">
                                 
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="transmission" id="" value="1" >Electric
                                    <span class="circle">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                  
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="transmission" id="" value="0">Non Electric
                                    <span class="circle">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>
                              </div>
                          </div>
                          </div>
                        <!-- ===========//=new used, gear type================== -->

                        <!-- ============Year================== -->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="my-input">Year to</label>
                                <select id="my-input" class="form-control">
                                  <option>All</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="my-input">Year</label>
                                <select id="my-input" class="form-control">
                                  <option>Any</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                        </div>
                        <!-- ===========//=Year================== -->
                        
                        
                        <!-- ============Price================== -->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="my-input">Max Price</label>
                                <select id="my-input" class="form-control">
                                  <option>All</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="my-input">Max Mileage</label>
                                <select id="my-input" class="form-control">
                                  <option>Any</option>
                                  <option>2019</option>
                                  <option>2019</option>
                                </select>
                              </div>
                          </div>
                        </div>
                        <!-- ===========//=Price================== -->
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Search</button>
                        </div>
                  </form>
                </div>
                <!-- =========//Bicycle Tab=============== -->


               

              </div>
            </div>
          </div>
          <!-- End Tabs on plain Card -->
      </div>
    