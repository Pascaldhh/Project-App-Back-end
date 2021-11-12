<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    // public function createName(Request $request)
    // {
    //     if($request->has('name'))
    //     {
    //         $name = new Name();
    //         $name->name = $request->get('name');
    //         $name->save();
    //         return response()->json([
    //             'message' => 'YO je naam is toegevoegd'
    //         ]);
    //     }
    // }
    public function allData(Request $request)
    {
        $data = ClassRoom::all();

        return response()->json([
            'classrooms' => $data,
        ]);
    }
}
