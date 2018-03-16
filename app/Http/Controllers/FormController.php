<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getForm(Request $r){



        if ($r->option =='brochure'){

            return view('form.brochure');
        }

        else if($r->option =='website'){

            return view('form.website');
        }

        else if($r->option =='leaflet'){

            return view('form.leaflet');
        }

        else if($r->option =='banner'){

            return view('form.banner');
        }

        else if($r->option =='corporate'){
            return view('form.corporate');
        }

        else if($r->option =='logo'){

            return view('form.logo');
        }

        else if($r->option =='vector'){

            return view('form.vector');
        }


    }

    public function storeBrochure(Request $r){
        return $r;
    }

    public function storeWebsite(Request $r){
        return $r;
    }

    public function storeLeaflet(Request $r){
        return $r;
    }
    public function storeBanner(Request $r){
        return $r;
    }

    public function storeCorporate(Request $r){
        return $r;
    }

    public function storeLogo(Request $r){
        return $r;
    }
    public function storeVector(Request $r){
        return $r;
    }

}
