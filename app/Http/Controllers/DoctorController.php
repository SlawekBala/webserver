<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Repositories\UserRepository;

class DoctorController extends Controller
{

    public function index(UserRepository $userRepo){

        $users = $userRepo->getAllDoctors();

        return view('doctors.list',["doctorsList"=>$users,
                                        "footerYear"=> date("Y"),
                                        "title"=> "Moduł lekarzy"]);
    }

    public function show(UserRepository $userRepo, $id){

        $doctor = $userRepo->find($id);//find szuka po parametrze
        return view('doctors.show', ["doctor"=>$doctor,
                                            "footerYear"=>date("Y"),
                                            "title"=> "Moduł lekarzy" ]);

    }

    public function create(UserRepository $userRepo){

        $userRepo->create([          //create tworzy i wysyła do bazy taką tablice
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

    public function edit(UserRepository $userRepo, $id){

        $doctor = $userRepo->update(["name" => "Test Edycji"], $id);

        //$doctor->save();    //save zapisuje wszystko co zedytowaliśmy do bazy

        return redirect('doctors');

    }

}
