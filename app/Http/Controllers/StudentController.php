<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KidsGrading;

class StudentController extends Controller
{
    public function updateBelt(Request $request, $id)
    {
        $request->validate([
            'belt_grade' => 'required|string',
        ]);

        $student = KidsGrading::findOrFail($id);
        $student->grade = $request->input('belt_grade');
        $student->updated_at = now();
        $student->save();

        return response()->json([
            'success' => true,
            'message' => 'Gradera ' . $student->name . ' ' . 'till ' . $student->grade . ' ? ',
            'new_grade' => $student->grade,
            'updated_at' => $student->updated_at->format('Y-m-d H:i:s'),
        ]);
    }
}

