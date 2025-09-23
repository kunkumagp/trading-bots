@extends('layouts.main')

@section('title', 'Dashboard - Trading Bots')

@section('content')
<div class="container">
    <!-- Welcome Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="h3 mb-1">Welcome back, {{ $user->name }}!</h1>
                    <p class="text-muted">{{ ucfirst($user->user_role) }} Dashboard - {{ now()->format('l, F j, Y') }}</p>
                </div>
                <div>
                    <span class="badge bg-success fs-6">
                        <i class="fas fa-circle me-1"></i>Online
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Total Trades</h5>
                            <h2 class="mb-0">{{ number_format($stats['total_trades']) }}</h2>
                        </div>
                        <div>
                            <i class="fas fa-exchange-alt fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Active Bots</h5>
                            <h2 class="mb-0">{{ $stats['active_bots'] }}</h2>
                        </div>
                        <div>
                            <i class="fas fa-robot fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card bg-warning text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Today's Profit</h5>
                            <h2 class="mb-0">${{ number_format($stats['profit_today'], 2) }}</h2>
                        </div>
                        <div>
                            <i class="fas fa-dollar-sign fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card bg-info text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Total Profit</h5>
                            <h2 class="mb-0">${{ number_format($stats['total_profit'], 2) }}</h2>
                        </div>
                        <div>
                            <i class="fas fa-chart-line fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="row g-4">
        <!-- Trading Activity -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="fas fa-chart-bar me-2"></i>
                        Recent Trading Activity
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Bot Name</th>
                                    <th>Pair</th>
                                    <th>Action</th>
                                    <th>Amount</th>
                                    <th>P&L</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <i class="fas fa-robot text-primary me-2"></i>
                                        Alpha Bot
                                    </td>
                                    <td>BTC/USDT</td>
                                    <td><span class="badge bg-success">Buy</span></td>
                                    <td>$1,250.00</td>
                                    <td class="text-success">+$125.50</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fas fa-robot text-primary me-2"></i>
                                        Beta Bot
                                    </td>
                                    <td>ETH/USDT</td>
                                    <td><span class="badge bg-danger">Sell</span></td>
                                    <td>$850.00</td>
                                    <td class="text-danger">-$25.30</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fas fa-robot text-primary me-2"></i>
                                        Gamma Bot
                                    </td>
                                    <td>ADA/USDT</td>
                                    <td><span class="badge bg-success">Buy</span></td>
                                    <td>$500.00</td>
                                    <td class="text-success">+$45.20</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Quick Actions & System Status -->
        <div class="col-lg-4">
            <!-- Quick Actions -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="fas fa-bolt me-2"></i>
                        Quick Actions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Create New Bot
                        </button>
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-cog me-2"></i>Bot Settings
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-download me-2"></i>Export Data
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- System Status -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="fas fa-server me-2"></i>
                        System Status
                    </h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Exchange API</span>
                            <span class="badge bg-success">Online</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Trading Engine</span>
                            <span class="badge bg-success">Running</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Database</span>
                            <span class="badge bg-success">Connected</span>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Last Update</span>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
.card {
    border: none;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    transition: all 0.2s ease-in-out;
}

.card:hover {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
}

.table th {
    border-top: none;
    font-weight: 600;
    background-color: #f8f9fa;
}

.badge {
    font-size: 0.75em;
}
</style>
@endsection

@section('scripts')
<script>
// Auto-refresh stats every 30 seconds
setInterval(function() {
    // You can add AJAX calls here to update stats in real-time
    console.log('Refreshing dashboard data...');
}, 30000);
</script>
@endsection