<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Exam;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class SiswaExamController extends Controller
{
    // Menampilkan daftar ujian siswa
    public function index()
    {
        return view('siswa.index');
    }

    // Menampilkan form token untuk masuk ujian
    public function tokenForm()
    {
        return view('exam.token');
    }

     public function checkToken(Request $request)
    {
        $request->validate(['token' => 'required']);

        $exam = Exam::where('token', $request->token)->first();

        if (!$exam) {
            return back()->withErrors(['token' => 'Token tidak valid']);
        }
        return view('exam.show', compact('exam'));
    }
}
