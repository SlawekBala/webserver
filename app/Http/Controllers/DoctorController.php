<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class DoctorController extends Controller
{

    public function index(){

        $users = User::where('type','doctor')->orderBY('name','asc')->get(); //to samo co SELECT * FROM users WHERE type='doctor'

        return view('doctors.list',["doctorsList"=>$users,
                                        "footerYear"=> date("Y"),
                                        "title"=> "Moduł lekarzy"]);
    }

    public function show($id){

        $doctor = User::find($id);//find szuka po parametrze
        return view('doctors.show', ["doctor"=>$doctor,
                                            "footerYear"=>date("Y"),
                                            "title"=> "Moduł lekarzy" ]);

    }

    public function create(){

        User::create([          //create tworzy i wysyła do bazy taką tablice
            'name'=>'Doctor 3',
            'email' => 'doctor@3.com',
            'password'=>bcrypt('doctor'),
            'phone'=>123456789,
            'address'=>"doc3",
            'status'=>'Active',
            'pesel'=>'60071581338',
            'type'=>'doctor'
        ]);

        return redirect('doctors');

    }

    public function edit($id){

        $doctor = User::find($id);

        $doctor->name = "Test Edycji";

        $doctor->save();    //save zapisuje wszystko co zedytowaliśmy do bazy

        return redirect('doctors');

    }

}
