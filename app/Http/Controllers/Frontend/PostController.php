<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Auth;
use App\vehicle\Car;
use App\vehicle\Car_attribute;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index','show');
    }
   
    public function index($id)
    {
        return view('frontend2.post.index');
    }

    public function Filter($id)
    {
        $attri= Attri::where('rear-ac', 1)->get();

        foreach ($attri as $attr) {
            $cars= Car::find($attr->car_id);
        }
    }
    public function create($id)
    {
        return view('frontend2.post.create.'.$id);
    }

  
    public function selectModel(Request $request)
    {
        // return 'ok';
        $models= DB::table('models')->where('make_id', $request->id )->get();
        foreach( $models as  $model){
            echo' <option value=" '.$model->id.' "> '.$model->title.'</option>';
        }
       
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'body_type'     => 'required',
            'condition'     => 'required',
            'make'          => 'required',
            'model'         => 'required',
            'transmission' => 'required',
            'mileage'        => 'required',
            'out_color'     => 'required',
            'in_color'       => 'required',
            'door'           => 'required',
            'Cylinder'       => 'required',
            'drive_type'    => 'required',
            'fuel'          => 'required',
            'price'          => 'required',
        ]);

        $user_id= Auth::user()->id;
        // return $request;

       $car=new Car();
       $car->user_id = $user_id;
       $car->body_type = $request->body_type;
       $car->condition = $request->condition;
       $car->make = $request->make;
       $car->model = $request->model;
       $car->edition = $request->edition;
       $car->transmission = $request->transmission;
       $car->mileage = $request->mileage;
       $car->out_color = $request->out_color;
       $car->in_color = $request->in_color;
       $car->door = $request->door;
       $car->Cylinder = $request->Cylinder;
       $car->drive_type = $request->drive_type;
       $car->fuel = $request->fuel;
       $car->alt_fuel = $request->alt_fuel;
       $car->price = $request->price;
       $car->description = $request->description;
       $car->save();

       $car_id= Car::where('user_id', $user_id)->orderBy('id', 'desc')->first();
       
       $attr= new Car_attribute();
       $attr->car_id = $car_id->id;
       $attr->ac_front = $request->ac_front;
       $attr->ac_rear = $request->ac_rear;
       $attr->cruise_control = $request->cruise_control;
       $attr->navigation = $request->navigation;
       $attr->power_locks = $request->power_locks;
       $attr->power_steering = $request->power_steering;
       $attr->keyless_entry = $request->keyless_entry;
       $attr->integrated_phone = $request->integrated_phone;
       $attr->bucket_seats = $request->bucket_seats;
       $attr->leather_interior = $request->leather_interior;
       $attr->memory_seat = $request->memory_seat;
       $attr->power_seat = $request->power_seat;

       $attr->airbag_driver = $request->airbag_driver;
       $attr->airbag_passenger = $request->airbag_passenger;
       $attr->airbag_side = $request->airbag_side;
       $attr->antilock_brakes = $request->antilock_brakes;
       $attr->fog_light = $request->fog_light;

       $attr->power_window = $request->power_window;
       $attr->r_w_defroster = $request->r_w_defroster;
       $attr->r_w_wiper = $request->r_w_wiper;
       $attr->tinted_glass = $request->tinted_glass;

       $attr->am_fm = $request->am_fm;
       $attr->cassette_player = $request->cassette_player;
       $attr->cd_single = $request->cd_single;
       $attr->cd_multi = $request->cd_multi;
       $attr->dvd = $request->dvd;
       $attr->alloy_wheel = $request->alloy_wheel;
       $attr->moon_sunroof = $request->moon_sunroof;
       $attr->third_row_seat = $request->third_row_seat;
       $attr->save();
       return redirect()->route('frontend.index')->with('msg', 'Car data saved successfully');

    }

  
    public function show($id)
    {
        return view('frontend2.post.show.single');
    }

  
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
