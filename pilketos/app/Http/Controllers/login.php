<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Events\CandidateAdded;
use App\Models\kandidat1;
use App\Models\kandidat2;
use App\Models\kandidat3;
use Illuminate\Support\Facades\Cache;


class login extends Controller
{
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'NIS' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role === 'admin') {
                return $this->showAdminDashboard();
            } else {
                return $this->showUserDashboard();
            }
        }

        return back()->withErrors(['loginerror' => 'Login failed!']);
    }

    protected function showAdminDashboard()
    {
        // Mengambil data kandidat
        $kandidat1Count = Kandidat1::count();
        $kandidat2Count = Kandidat2::count();
        $kandidat3Count = Kandidat3::count();

        // Data untuk chart doughnut
        $data = [
            'labels' => ['Haura Azalia', 'Rizky Fadillah', 'Bagas Haidar'],
            'datasets' => [
                [
                    'label' => 'Jumlah Vote',
                    'backgroundColor' => [
                        '#2563eb',
                        '#22c55e',
                        '#dc2626'
                    ],
                    'borderWidth' => 4,
                    'data' => [$kandidat1Count, $kandidat2Count, $kandidat3Count]
                ]
            ]
        ];
        $datas = [
            'labels' => ['Haura Azalia', 'Rizky Fadillah', 'Bagas Haidar'],
            'datasets' => [
                [
                    'label' => 'Jumlah Vote',
                    'backgroundColor' => [
                        '#2563eb',
                        '#22c55e',
                        '#dc2626'
                    ],
                    'borderWidth' => 0,
                    'data' => [$kandidat1Count, $kandidat2Count, $kandidat3Count]
                ]
            ]
        ];

        return view('admin.dashboard', ['chartData' => $data,'chartDatas' => $datas, 'kandidat1' => $kandidat1Count, 'kandidat2' => $kandidat2Count, 'kandidat3' => $kandidat3Count]);
    }

    protected function showUserDashboard()
    {
        return view('dashboard');
    }
    
    public function logout(Request $request):RedirectResponse { 
        // Auth::logout();
 
        // $request->session()->invalidate();
 
        // $request->session()->regenerateToken();
 
        // return redirect('/');
        $user = Auth::user();
        Cache::forget('user-session-' . $user->id);

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
