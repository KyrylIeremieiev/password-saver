<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\getKeyModel;
class PutKeyController extends Controller
{
    public function insert(Request $request, $id){
        $validatedData = $request->validate([
            'id' => 'required|string',
            'value' => 'required|string',
            // Add more validation rules as needed
        ]);

        if (getKeyModel::where('id', $validatedData["id"])->exists()) {
            getKeyModel::where('id', $validatedData["id"])->delete();
        } 
        DB::table('pass')->insert([
            'id' => $validatedData["id"],
            'value' => $validatedData['value']
            // Add more columns and values as needed
        ]);

        return $validatedData;
    }
}
