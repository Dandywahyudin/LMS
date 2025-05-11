<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        
        return view('dashboardAdmin', compact('exams'));
    }

    public function create()
    {
        return view('exam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mata_pelajaran' => 'required|string|max:255',
            'link_form' => 'required|url',
        ]);

        Exam::create([
            'mata_pelajaran' => $request->mata_pelajaran,
            'link_form' => $request->link_form,
        ]);

        return redirect()->route('exam.index')->with('success', 'Ujian berhasil ditambahkan.');
    }
}

