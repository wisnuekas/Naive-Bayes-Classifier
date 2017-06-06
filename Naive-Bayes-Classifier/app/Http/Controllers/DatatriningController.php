<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datatrining;

class DatatriningController extends Controller
{
    public function index(){
        $poutput = Datatrining::poutput(1);
        $page1 = Datatrining::page(1,1);
        $pspactacle1 = Datatrining::pspactacle(1,1);
        $pasigmatic1 = Datatrining::pasigmatic(1,2);
        $ptear1 = Datatrining::ptear(1,2);
        $countpsatu = $poutput * $page1 * $pspactacle1 * $pasigmatic1 * $ptear1;
        //dd($countpsatu);
        $poutput2 = Datatrining::poutput(2);
        $page2 = Datatrining::page(2,1);
        $pspactacle2 = Datatrining::pspactacle(2,1);
        $pasigmatic2 = Datatrining::pasigmatic(2,2);
        $ptear2 = Datatrining::ptear(2,2);
        $countpdua = $poutput2 * $page2 * $pspactacle2 * $pasigmatic2 * $ptear2;

        $poutput3 = Datatrining::poutput(3);
        $page3 = Datatrining::page(3,1);
        $pspactacle3 = Datatrining::pspactacle(3,1);
        $pasigmatic3 = Datatrining::pasigmatic(3,2);
        $ptear3 = Datatrining::ptear(3,2);
        $countptiga = $poutput3 * $page3 * $pspactacle3 * $pasigmatic3 * $ptear3;
        //dd($countpsatu, $countpdua, $countptiga);
        if(($countpsatu>$countpdua)&&($countpsatu>$countptiga)){
            $output = 'satu';
        }elseif (($countpdua>$countpsatu)&&($countpdua>$countptiga)){
            $output = 'dua';
        }else{
            $output ='tiga';
        }
        return view('datatrining.index')->with('output',$output);
    }
}
