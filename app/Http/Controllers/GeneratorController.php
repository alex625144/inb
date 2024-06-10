<?php

namespace App\Http\Controllers;

use App\Models\GeneratedNumber;

class GeneratorController extends Controller
{
    /**
     * Generate a unique random number and store it in the model.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate()
    {
        $randomNumber = mt_rand(100, 999);

        $generatedNumber = new GeneratedNumber();
        $generatedNumber->random_number = $randomNumber;
        $generatedNumber->save();

        return response()->json(['random_number' => $randomNumber], 200);
    }
}
