<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\getKeyModel;
class GetKeyController extends Controller
{
    public function get($id){
        $result = DB::table('pass')
            ->where('id', $id)
            ->get();

        return $result[0];
        
    }
}
