@extends('frontend2.layouts.app')

@section('banner')
<div style="height:200px"></div>
@endsection




@section('content')
<input  required type="hidden" id="csrftoken" name="_token" value="{{ csrf_token() }}">




<div class="container" >
    <div class="row">
        <div class="col-md-5">



            {{-- ======body type========== --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Fill up the form please (*Required)</h5>

                    <li class="dropdown nav-item  nav-link ">
                        <a href="#" class="dropdown-toggle btn btn-primary " data-toggle="dropdown">
                            <i class="fa fa-car" aria-hidden="true"></i> Select body type
                            <div class="ripple-container"></div>
                        </a>
        
                        <div class="dropdown-menu dropdown-with-icons">

                            <a href="javascript:void(0)" onclick="bType(this.id)" id="convertible"  class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/convertible.jpg" alt="" height="100"> convertible
                            </a>
                            <a href="javascript:void(0)" onclick="bType(this.id)" id="coupe"  class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/coupe.jpg" alt="" height="100"> coupe
                            </a>

                            <a href="javascript:void(0)" onclick="bType(this.id)" id="suv" class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/crossover.jpg" alt="" height="100"> suv/crossover
                            </a>
                            <a href="javascript:void(0)" onclick="bType(this.id)" id="hatchbacks" class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/hatchback.jpg" alt="" height="100"> hatchbacks
                            </a>
                            <a href="javascript:void(0)" onclick="bType(this.id)" id="limousine" class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/limousine.jpg" alt="" height="100"> limousine
                            </a>
                            
                            
                            <a href="javascript:void(0)" onclick="bType(this.id)" id="minivan" class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/minivan.jpg" alt="" height="100"> minivan/van/mpv
                            </a>
                            
                            <a href="javascript:void(0)" onclick="bType(this.id)" id="pickup-trucks" class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/pickup-trucks.svg" alt="" height="100">pickup-trucks
                            </a>
                            <a href="javascript:void(0)" onclick="bType(this.id)" id="sedan" class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/sedan.jpg" alt="" height="100"> sedan
                            </a>
                            <a href="javascript:void(0)" onclick="bType(this.id)" id="semi-truck" class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/semi-truck.jpg" alt="" height="100"> semi-truck
                            </a>
                            <a href="javascript:void(0)" onclick="bType(this.id)" id="sports-cars" class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/sports-cars.svg" alt="" height="100"> sports-cars
                            </a>
                            <a href="javascript:void(0)" onclick="bType(this.id)" id="truck" class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/truck.jpg" alt="" height="100"> truck
                            </a>
                            <a href="javascript:void(0)" onclick="bType(this.id)" id="wagons" class="dropdown-item">
                                <img class=" material-icons" src="{{asset('/')}}frontend/carbody/wagons.svg" alt="" height="100"> wagons
                            </a>

                            <a href="javascript:void(0)" onclick="bType(this.id)" id="other" class="dropdown-item">
                                 Other
                            </a>
                        </div>

                    </li>
               
                    {{-- ======body type end========== --}}








            {{--  =====Form start=============  --}}
            <form action="{{route('frontend.save','id')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                
                        
                    {{-- ======body type========== --}}
                   
                    <input id="body-type" name="body_type" type="text" class="form-control" placeholder="*body type" value="" readonly required>

                  

                    {{-- =======Condition========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-align-justify" aria-hidden="true"></i>
                        </span>
                        </div>

                        <select required  id="my-select" class="form-control" name="condition">
                            <option >*Condition</option>
                            <option value="new">New</option>
                            <option value="used">Used</option>
                            <option value="certified">Certified (CPO)</option>
                            <option value="reconditioned">Reconditioned</option>
                           
                        </select>

                    </div>
                    </div>
                    {{-- =======Make========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-industry" aria-hidden="true"></i>
                        </span>
                        </div>
                        @php
                            $makes= DB::table('makes')->get();
                        @endphp

                        <select required  onchange="cmodel(this.value)" id="my-select model-select" class="form-control" name="make">
                            <option value="">*Make</option>
                            @foreach ($makes as $make)
                                <option value="{{$make->id}}">{{$make->title}}</option>
                            @endforeach
                        </select>

                    </div>
                    </div>

                    {{-- =======Model========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-delicious" aria-hidden="true"></i>
                        </span>
                        </div>
                       
                        <select required  id="model-select" class="form-control" name="model">
                            <option>*Select Model</option>
                           
                        </select>
                    </div>
                    </div>
                    {{-- =======Version========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-object-group" aria-hidden="true"></i>
                        </span>
                        </div>
                        <input type="text" name="edition" id="" class="form-control" placeholder="Version/Edition (Optional)">
                    </div>
                    </div>
                    {{-- =======Transmission========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </span>
                        </div>
                        <select  id="my-select" class="form-control" name="transmission" required>
                            <option value="">*Transmission </option>
                            <option value="Automanual">Automanual</option>
                            <option value="Automatic">Automatic</option>
                            <option value="CVT ">CVT</option>
                            <option value="Manual">Manual</option>
                            <option value="Other">Other</option>
                            
                        </select>
                    </div>
                    </div>
                    
                    {{-- =======Mileage========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-tachometer" aria-hidden="true"></i>
                        </span>
                        </div>
                        <input  required type="number" name="mileage" id="" step="10000" class="form-control" placeholder="*Mileage">
                    </div>
                    </div>
                    {{-- =======Exterior Color========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-paint-brush" aria-hidden="true"></i>
                        </span>
                        </div>
                        <select required  id="my-select" class="form-control" name="out_color">
                            <option>*Exterior Color</option>
                            <option  value="Beige">Beige</option>
                            <option value="Black">Black</option>
                            <option value="Blue">Blue</option>
                            <option value="Brown">Brown</option>
                            <option value="Gold">Gold</option>
                            <option value="Gray">Gray</option>
                            <option value="Green">Green</option>
                            <option value="Orange">Orange</option>
                            <option value="Pink">Pink</option>
                            <option value="Purple">Purple</option>
                            <option value="Red">Red</option>
                            <option value="Silver">Silver</option>
                            <option value="White">White</option>
                            <option value="Yellow">Yellow</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    </div>
                    {{-- =======Interior Color========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-paint-brush" aria-hidden="true"></i>
                        </span>
                        </div>
                        <select required  id="my-select" class="form-control" name="in_color">
                                <option>*Interior Color</option>
                                <option  value="Beige">Beige</option>
                                <option value="Black">Black</option>
                                <option value="Blue">Blue</option>
                                <option value="Brown">Brown</option>
                                <option value="Gold">Gold</option>
                                <option value="Gray">Gray</option>
                                <option value="Green">Green</option>
                                <option value="Orange">Orange</option>
                                <option value="Pink">Pink</option>
                                <option value="Purple">Purple</option>
                                <option value="Red">Red</option>
                                <option value="Silver">Silver</option>
                                <option value="White">White</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Other">Other</option>
                            </select>
                    </div>
                    </div>
                    {{-- =======Number of Doors========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-window-close" aria-hidden="true"></i>
                        </span>
                        </div>
                        <input  required type="number" name="door" id=""  class="form-control" placeholder="*Door">
                    </div>
                    </div>

                    {{-- =======Engine Cylinder========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                        </span>
                        </div>
                        <input  required type="number" name="Cylinder" id=""  class="form-control" placeholder="*Cylinders">

                    </div>
                    </div>
                    {{-- =======Drive Type========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                        </span>
                        </div>
                        <select required  id="my-select" class="form-control" name="drive_type">
                            <option >*Drive Type</option>
                            <option value="awd">AWD</option>
                            <option value="fwd">FWD</option>
                            <option value="rwd">RWD</option>
                            <option value="rwd">4x2/2-wheel drive</option>
                            <option value="rwd">4x4/4-wheel drive</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    </div>
                    {{-- =======Fuel Type========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-cogs" aria-hidden="true"></i> 
                        </span>
                        
                        </div>

                        {{--  =============  --}}
                            <select id="my-select" name="fuel" class="form-control" required>
                                <option selected>*Fuel Type</option>
                                <option value="octane">Octane</option>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="cng">CNG</option>
                                <option value="lpg">LPG</option>
                                <option value="gasoline">Gasoline</option>
                                <option value="electric">Hybrid</option>
                                <option value="electric">Electric</option>
                                <option value="f85">E85 Flex FUel</option>
                            </select>
                        {{--  =============  --}}
                    </div>
                    </div>

                    {{-- =======Alternate Fuel========== --}}
                    <div class="form-group bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-cogs" aria-hidden="true"></i> 
                        </span>
                        
                        </div>

                        {{--  =============  --}}
                            <select id="my-select" name="alt_fuel" class="form-control">
                                <option selected>Alternate Fuel</option>
                                <option value="octane">Octane</option>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="cng">CNG</option>
                                <option value="lpg">LPG</option>
                                <option value="gasoline">Gasoline</option>
                                <option value="electric">Hybrid</option>
                                <option value="electric">Electric</option>
                                <option value="f85">E85 Flex FUel</option>
                            </select>
                        {{--  =============  --}}
                    </div>
                    </div>

                        
                    

                {{-- ====Price========= --}}
                <div class="form-group bmd-form-group">
                    <label for="exampleInput1" class="bmd-label-floating">*Enter Price</label>
                    <input  required name="price" type="number" class="form-control" placeholder="$" >
                    <span class="bmd-help">Price/Description.</span>
                </div>
            </div>
        </div>
        {{--  <button class="btn btn-primary" type="submit">Save Progress</button>  --}}
            

        
        {{-- ====Enter Description========= --}}
            <div class="card">
                <div class="card-body">
                    <div class="form-group bmd-form-group">
                        <label for="exampleInput1" class="bmd-label-floating">Enter Description (optional)</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                        <span class="bmd-help">Enter Description (optional)</span>
                    </div>

                </div>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        {{-- =======col-md-5 end======== --}}







        {{-- ============================ --}}
        {{-- =======Cars Features======== --}}
        {{-- ============================ --}}
        <div class="col-md-5">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Your Cars Features</h5>

                    {{-- ======A/C: Front========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="ac_front" class="form-check-input" type="checkbox" value="1"> A/C: Front
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ======A/C: Rear========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="ac_rear" class="form-check-input" type="checkbox" value="1"> A/C: Rear
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ======Cruise Control========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="cruise_control" class="form-check-input" type="checkbox" value="1"> Cruise Control
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ======Navigation========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="navigation" class="form-check-input" type="checkbox" value="1"> Navigation
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ======Power Locks========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="power_locks" class="form-check-input" type="checkbox" value="1"> Power Locks
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ======Power Steering========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="power_steering" class="form-check-input" type="checkbox" value="1"> Power Steering
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ======Keyless Entry========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="keyless_entry" class="form-check-input" type="checkbox" value="1"> Keyless Entry
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ======Integrated Phone========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="integrated_phone" class="form-check-input" type="checkbox" value="1"> Integrated Phone
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>

                </div>
            </div>

            {{-- ======Seats=========== --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Seats</h5>

                    {{-- ========Bucket Seats========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="bucket_seats" class="form-check-input" type="checkbox" value="1"> Bucket Seats
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Leather Interior========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="leather_interior" class="form-check-input" type="checkbox" value="1"> Leather Interior
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Memory Seats========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="memory_seat" class="form-check-input" type="checkbox" value="1"> Memory Seats
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Power Seats========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="power_seat" class="form-check-input" type="checkbox" value="1"> Power Seats
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>


            {{-- ======Safety=========== --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Safety</h5>

                    {{-- ========Airbag: Driver========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="airbag_driver" class="form-check-input" type="checkbox" value="1"> Airbag: Driver
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Airbag: Passenger========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="airbag_passenger" class="form-check-input" type="checkbox" value="1"> Airbag: Passenger
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Airbag: Side========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="airbag_side" class="form-check-input" type="checkbox" value="1"> Airbag: Side
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Alarm========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="alarm" class="form-check-input" type="checkbox" value="1"> Alarm
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Antilock Brakes========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="antilock_brakes" class="form-check-input" type="checkbox" value="1"> Antilock Brakes
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Fog Lights========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="fog_light" class="form-check-input" type="checkbox" value="1"> Fog Lights
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>

            {{-- ======Windows=========== --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Windows</h5>

                    {{-- ========Power Windows========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="power_window" class="form-check-input" type="checkbox" value="1"> Power Windows
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Rear Window Defroster========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="r_w_defroster" class="form-check-input" type="checkbox" value="1"> Rear Window Defroster
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Rear Window Wiper========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="r_w_wiper" class="form-check-input" type="checkbox" value="1"> Rear Window Wiper
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Tinted Glass========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="tinted_glass" class="form-check-input" type="checkbox" value="1"> Tinted Glass
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>


            {{-- ======Entertainment=========== --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Entertainment</h5>

                    {{-- ========Power Windows========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="am_fm" class="form-check-input" type="checkbox" value="1"> AM/FM Stereo
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Cassette Player========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="cassette_player" class="form-check-input" type="checkbox" value="1"> Cassette Player
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========CD (Single Disc)r========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="cd_single" class="form-check-input" type="checkbox" value="1"> CD (Single Disc)
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========CD (Multi Disc)========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="cd_multi" class="form-check-input" type="checkbox" value="1"> CD (Multi Disc)
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========MP3 (Single Disc)========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="mp3" class="form-check-input" type="checkbox" value="1"> MP3
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Premium Sound======== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="premium_sound" class="form-check-input" type="checkbox" value="1"> Premium Sound
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========DVD System========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="dvd" class="form-check-input" type="checkbox" value="1"> DVD System
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>


            {{-- ======Other=========== --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Other</h5>

                    {{-- ========Alloy Wheelss========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="alloy_wheel" class="form-check-input" type="checkbox" value="1"> Alloy Wheels
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Moonroof/Sunroof========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="moon_sunroof" class="form-check-input" type="checkbox" value="1"> Moonroof/Sunroof
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    {{-- ========Third Row Seats========== --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input name="third_row_seat" class="form-check-input" type="checkbox" value="1"> Third Row Seats
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>


        </div>

    </form>

    </div>
</div>

<script>
        function bType(v){
            $('#body-type').val(v);
        }


        {{-- =======car model========== --}}
        function cmodel(val){
                var iie= val;
                    $.ajax({
                        type:"POST",
                        url:'http://localhost/carsler-2/public/post/selectModel',
                        data: {
                            id: iie,
                            _token: $('#csrftoken').val(),
                        },
                        dataType: "html",
                        success: function(response) {
                        $('#model-select').html(response);
                        console.log(response);
                            
                        }
                    })

            }
    
        {{-- =======car model========== --}}
</script>
@endsection