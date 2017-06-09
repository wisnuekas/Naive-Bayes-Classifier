<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datatrining;

class DatatriningController extends Controller
{
    public function index(Request $req){
        $poutput = Datatrining::poutput(1);
        $page1 = Datatrining::page(1,$req->age);
        $pspactacle1 = Datatrining::pspactacle(1,$req->spectacle);
        $pasigmatic1 = Datatrining::pasigmatic(1,$req->asigmatic);
        $ptear1 = Datatrining::ptear(1,$req->tear);
        $countpsatu = $poutput * $page1 * $pspactacle1 * $pasigmatic1 * $ptear1;
        //dd($countpsatu);
        $poutput2 = Datatrining::poutput(2);
        $page2 = Datatrining::page(2,$req->age);
        $pspactacle2 = Datatrining::pspactacle(2,$req->spectacle);
        $pasigmatic2 = Datatrining::pasigmatic(2,$req->asigmatic);
        $ptear2 = Datatrining::ptear(2,$req->tear);
        $countpdua = $poutput2 * $page2 * $pspactacle2 * $pasigmatic2 * $ptear2;

        $poutput3 = Datatrining::poutput(3);
        $page3 = Datatrining::page(3,$req->age);
        $pspactacle3 = Datatrining::pspactacle(3,$req->spectacle);
        $pasigmatic3 = Datatrining::pasigmatic(3,$req->asigmatic);
        $ptear3 = Datatrining::ptear(3,$req->tear);
        $countptiga = $poutput3 * $page3 * $pspactacle3 * $pasigmatic3 * $ptear3;
        //dd($countpsatu, $countpdua, $countptiga);
        if(($countpsatu>$countpdua)&&($countpsatu>$countptiga)){
            $output = 'using hard contact lenses';
        }elseif (($countpdua>$countpsatu)&&($countpdua>$countptiga)){
            $output = 'using soft contact lenses';
        }else{
            $output ='not using any contact lenses';
        }

        return view('datatrining.index', [
          'age' => $req->age,
          'spectacle' => $req->spectacle,
          'asigmatic' => $req->asigmatic,
          'tear' => $req->tear,
          'output' => $output
        ]);
    }

    public function result()
    {
      return view('index');
    }

}
