<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the dashboard page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        
        // Sample dashboard data
        $stats = [
            'total_trades' => 1250,
            'active_bots' => 15,
            'profit_today' => 425.50,
            'total_profit' => 12750.75
        ];
        
        return view('dashboard', compact('user', 'stats'));
    }
}