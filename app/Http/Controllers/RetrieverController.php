<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneratedNumber;
use Illuminate\Support\Facades\Validator;
class RetrieverController extends Controller
{
    /**
     * Retrieve the random_number field by id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function retrieve(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }


        $id = $request->query('id');
        $generatedNumber = GeneratedNumber::find($id);

        if (!$generatedNumber) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        return response()->json(['random_number' => $generatedNumber->random_number], 200);
    }
}
