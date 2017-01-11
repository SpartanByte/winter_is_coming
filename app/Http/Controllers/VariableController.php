<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariableController extends Controller
{
    //
    public function show(){

    	$example= 'This is a test to work on passing variables to the view from the controller';
        $example2 = [ 
            'key1' => 'This is key1',
            'key2' => 'This is key2',
            'key3' => 'This is key3'
        ];

        $example3 = 3;

    	// this is passing the $characters array to the view welcome.blade.php
    	return view('/var-test')->withExample($example)->withExample2($example2)->withExample3($example3);
    }
}

