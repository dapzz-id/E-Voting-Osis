<?php

namespace App\Http\Controllers;

use App\Models\kandidat1;
use App\Models\kandidat2;
use App\Models\kandidat3;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard');
    }
    public function kandidat1() {
        return view('kandidat1.main');
    }
    public function kandidat2() {
        return view('kandidat1.kandidat2');
    }
    public function kandidat3() {
        return view('kandidat1.kandidat3');
    }
    public function after() {
        return view('after');
    }
    public function daftar1() {
        $data = kandidat1::all();
        return view('admin.daftar1', compact('data'));
    }
    public function daftar2() {
        $data = kandidat2::all();
        return view('admin.daftar_2', compact('data'));
    }public function daftar3() {
        $data = kandidat3::all();
        return view('admin.daftar3', compact('data'));
    }
}
