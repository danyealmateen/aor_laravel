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
        $student->save();

        return back()->with('success', 'Bälte uppdaterat för ' . $student->name);
    }
}

