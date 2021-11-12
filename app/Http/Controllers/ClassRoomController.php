<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function createData(Request $request)
    {
        if($request->has('title'))
        {
            $title = new ClassRoom();
            $title->title = $request->get('title');
            $title->subimages = $request->get('subimages');
            $title->description = $request->get('description');
            $title->headimage = $request->get('headimage');
            $title->division_id = $request->get('division_id');
            $title->save();
            return response()->json([
                'message' => 'uh oh, het werkt'
            ]);
        }
    }
    public function allData(Request $request)
    {
        $data = ClassRoom::all();

        return response()->json([
            'classrooms' => $data,
        ]);
    }
}
