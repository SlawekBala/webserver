<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{

    public function index(){
        $doctorsList = array(

            array("id"=>1,"lastname"=>"Newman","firstname"=>"John","email"=>"john@newman.com","phone"=>"123123123","adress"=>"Adress 1","status"=>"Dostępny"),
            array("id"=>2,"lastname"=>"Austin","firstname"=>"Adam","email"=>"adam@austin.com","phone"=>"123123123","adress"=>"Adress 2","status"=>"Niedostępny"),
            array("id"=>3,"lastname"=>"Carrson","firstname"=>"Bob","email"=>"bob@carrson.com","phone"=>"123123123","adress"=>"Adress 3","status"=>"Dostępny"),

        );

        return view('doctors.list',["doctorsList"=>$doctorsList,
                                        "footerYear"=> date("Y"),
                                        "title"=> "Moduł lekarzy"]);
    }
}
