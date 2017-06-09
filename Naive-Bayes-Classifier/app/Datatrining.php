<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datatrining extends Model
{


    public static function poutput($output){
        $datas = Datatrining::all();
        $countDatas = count($datas);
        $dataOutput = Datatrining::where('output','=',$output)->get();
        $countOutput = count($dataOutput);
        $poutput = $countOutput / $countDatas;
        return $poutput;

    }
    public static function page($output,$param){
        $dataParam_ = Datatrining::where('output','=',$output)->where('age','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('output','=',$output)->get();
        $dataOutputParam = count($dataOutputParam_);

        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 3;
        }

        $page = $dataParam/$dataOutputParam;
        return $page;
    }
    public static function pspactacle($output,$param){
        $dataParam_ = Datatrining::where('output','=',$output)->where('spectacle','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('output','=',$output)->get();
        $dataOutputParam = count($dataOutputParam_);

        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 2;
        }

        $pspactacle = $dataParam/$dataOutputParam;
        return $pspactacle;
    }
    public static function pasigmatic($output,$param){
        $dataParam_ = Datatrining::where('output','=',$output)->where('asigmatic','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('output','=',$output)->get();
        $dataOutputParam = count($dataOutputParam_);
        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 2;
        }
        $pasigmatic = $dataParam/$dataOutputParam;
        return $pasigmatic;
    }
    public static function ptear($output,$param){
        $dataParam_ = Datatrining::where('output','=',$output)->where('tear','=',$param)->get();
        $dataParam = count($dataParam_);
        $dataOutputParam_ = Datatrining::where('output','=',$output)->get();
        $dataOutputParam = count($dataOutputParam_);
        if($dataParam == 0){
            $dataParam = $dataParam +1;
            $dataOutputParam = $dataOutputParam + 2;
        }
        $tear = $dataParam/$dataOutputParam;
        return $tear;
    }



}
