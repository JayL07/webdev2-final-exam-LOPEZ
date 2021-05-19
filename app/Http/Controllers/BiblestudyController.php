<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biblewisdom;
class BiblestudyController extends Controller
{
    public function biblestudylist (Request $request) {

        $biblestudy = biblewisdom::all();
        return view ('/biblestudylist', compact ('biblestudy'));
       }
    
       public function biblestudyform (Request $request) {
    
        $biblestudy = new biblewisdom();
        return view ('/biblestudyform', compact ('biblestudy'));
       }
    
       public function createform (Request $request) {
    
        $biblestudy = new biblewisdom();
        $biblestudy->name = $request-> name;
        $biblestudy->email = $request-> email;
        $biblestudy->number = $request-> number;
        $biblestudy->bdate = $request-> bdate;
        $biblestudy->religion = $request-> religion;
        $biblestudy->bsdate = $request-> bsdate;
        $biblestudy->bstime= $request-> bstime;
        $biblestudy->bslocation = $request-> bslocation;
        
       if ($biblestudy->save()) {
            return redirect ('/thank-you');
       }
            return redirect ('/thank-you');
       }
    
       public function thankyou (Request $request) {
    
        $biblestudy = new biblewisdom();
        return view ('/thankyou');
       }
    }