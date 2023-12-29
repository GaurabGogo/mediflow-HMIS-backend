<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class TableController extends Controller
{
    function addData(Request $req){
        $table = new Table;
        $table -> ageGroup = $req -> input('ageGroup'); 
        $table -> femaleNew = $req -> input('femaleNew'); 
        $table -> maleNew = $req -> input('maleNew'); 
        $table -> femaleTotal = $req -> input('femaleTotal'); 
        $table -> maleTotal = $req -> input('maleTotal'); 
        $table -> save();
        return $table;
    }
    function listData(){
        return Table::all();
    }
}
