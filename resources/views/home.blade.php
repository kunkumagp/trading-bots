@extends('layouts.main')

@section('title', 'Home - Trading Bots')

@section('content')
<div class="container">
    <!-- Hero Section -->
    <div class="row align-items-center min-vh-75">
        <div class="col-lg-6">
            <h1 class="display-4 fw-bold text-primary mb-4">
                <i class="fas fa-robot me-3"></i>
                Trading Bots Platform
            </h1>
            <p class="lead mb-4">
                Automate your trading strategies with our advanced AI-powered trading bots. 
                Monitor, analyze, and optimize your cryptocurrency trading portfolio.
            </p>
            
            @auth
                <div class="d-flex gap-3">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-tachometer-alt me-2"></i>Go to Dashboard
                    </a>
                </div>
            @else
                <div class="d-flex gap-3">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-sign-in-alt me-2"></i>Get Started
                    </a>
                    <a href="#features" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-info-circle me-2"></i>Learn More
                    </a>
                </div>
            @endauth
        </div>
        
        <div class="col-lg-6">
            <div class="text-center">
                <i class="fas fa-chart-line text-primary" style="font-size: 15rem; opacity: 0.1;"></i>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="fw-bold">Platform Features</h2>
                <p class="text-muted">Powerful tools for automated trading</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-robot text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5 class="card-title">AI Trading Bots</h5>
                        <p class="card-text">Advanced algorithms that analyze market patterns and execute trades automatically.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-shield-alt text-success mb-3" style="font-size: 3rem;"></i>
                        <h5 class="card-title">Risk Management</h5>
                        <p class="card-text">Built-in risk controls and stop-loss mechanisms to protect your investments.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-chart-bar text-warning mb-3" style="font-size: 3rem;"></i>
                        <h5 class="card-title">Real-time Analytics</h5>
                        <p class="card-text">Comprehensive dashboards with live trading data and performance metrics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light rounded mt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <h3 class="text-primary fw-bold">1,000+</h3>
                    <p class="mb-0">Active Users</p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-primary fw-bold">$2.5M+</h3>
                    <p class="mb-0">Trading Volume</p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-primary fw-bold">15+</h3>
                    <p class="mb-0">Trading Pairs</p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-primary fw-bold">99.9%</h3>
                    <p class="mb-0">Uptime</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('styles')
<style>
.min-vh-75 {
    min-height: 75vh;
}

.card {
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-5px);
}
</style>
@endsection