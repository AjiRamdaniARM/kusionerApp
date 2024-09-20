<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Jawaban;
use Illuminate\Support\Facades\DB;

class analyticsController extends Controller
{
    public function index()
    {
        // Menghitung jumlah pengguna terdaftar
        $jumlahUsers = User::count();

        // Mengambil data jawaban 
        $form = Jawaban::all();
        $jumlahJawaban = $form->count();

        // === ambil data user yang sudah mengisi === //
        $getUser = DB::table('jawabans')
        ->join('users', 'jawabans.user_id', '=', 'users.id')
        ->select('users.*')
        ->get();
    

        // Return the data to the view
        return view('dashboard.analytics.index', compact('jumlahUsers', 'jumlahJawaban', 'form','getUser'));
    }
}
