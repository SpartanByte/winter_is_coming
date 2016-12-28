<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    public function show(){

    	$characters = [

    		'Daenerys Targaryen' => 'Emilia Clarke',
    		'Jon Snow' => 'Kit Harington',
    		'Arya Stark' => 'Maisie Williams',
    		'Melisandre' => 'Carice von Houten',
    		'Khal Drogo' => 'Jason Momoa',
    		'Tyrion Lannister' => 'Peter Dinklage',
    		'Ramsay Bolton' => 'Iwan Rheon',
    		'Petyr Baelish' => 'Aidan Gillen',
    		'Brienne of Tarth' => 'Gwendoline Christie',
    		'Lord Varys' => 'Conleth Hill'
    	];

    	// this is passing the $characters array to the view welcome.blade.php
    	return view('welcome')->withCharacters($characters);
    }


}
