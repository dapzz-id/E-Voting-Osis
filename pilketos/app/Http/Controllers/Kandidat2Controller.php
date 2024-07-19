<?php

namespace App\Http\Controllers;

use App\Models\kandidat1;
use App\Models\kandidat2;
use App\Models\kandidat3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Kandidat2Controller extends Controller
{
    public function input(Request $request) {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Cek apakah data dengan NIS yang sama sudah ada di salah satu tabel kandidat
        $existingKandidat1 = Kandidat1::where('NIS', $user->NIS)->first();
        $existingKandidat2 = Kandidat2::where('NIS', $user->NIS)->first();
        $existingKandidat3 = Kandidat3::where('NIS', $user->NIS)->first();

        if ($existingKandidat1 || $existingKandidat2 || $existingKandidat3) {
            // Ambil timestamp dan tabel dari data yang sudah ada
            $timestamp = null;
            $tabelKandidat = null;
            if ($existingKandidat1) {
                $timestamp = $existingKandidat1->created_at;
                $tabelKandidat = 'Haura Azalia';
            } elseif ($existingKandidat2) {
                $timestamp = $existingKandidat2->created_at;
                $tabelKandidat = 'Rizky Fadillah';
            } elseif ($existingKandidat3) {
                $timestamp = $existingKandidat3->created_at;
                $tabelKandidat = 'Bagas Haidar';
            }

            // Format timestamp
            $formattedTimestamp = $timestamp->format('d-m-Y H:i:s');

            // Jika data sudah ada di salah satu tabel, berikan pesan bahwa data sudah pernah diinput
            return redirect()->back()->with([
                'error' => 'Anda sudah pernah menginput data pada ' . $formattedTimestamp . ' di tabel ' . $tabelKandidat,
                'tabelKandidat' => $tabelKandidat,
                'timestamp' => $formattedTimestamp
            ]);
        }

        // Simpan data ke tabel kandidat1s
        $kandidat = new kandidat2();
        $kandidat->NIS = $user->NIS;
        $kandidat->name = $user->name;
        $kandidat->save();

        // Redirect atau response setelah data disimpan
        return redirect()->route('after')->with([
            'success' => 'Data kandidat berhasil disimpan.',
            'tabelKandidat' => 'Rizky Fadillah',
            'timestamp' => now()->format('d-m-Y H:i:s')
        ]);
    }
}
