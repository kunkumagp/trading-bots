@extends('layouts.auth')

@section('title', 'Login - Trading Bots')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0">
                        <i class="fas fa-robot me-2"></i>
                        Sign In
                    </h3>
                    <p class="mb-0 opacity-75">Access your trading dashboard</p>
                </div>
                
                <div class="card-body p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope me-2"></i>Email Address
                            </label>
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autofocus
                                placeholder="Enter your email"
                            >
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                <i class="fas fa-lock me-2"></i>Password
                            </label>
                            <input 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                id="password" 
                                name="password" 
                                required
                                placeholder="Enter your password"
                            >
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input 
                                type="checkbox" 
                                class="form-check-input" 
                                id="remember" 
                                name="remember"
                                {{ old('remember') ? 'checked' : '' }}
                            >
                            <label class="form-check-label" for="remember">
                                Remember me
                            </label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-sign-in-alt me-2"></i>
                                Sign In
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="card-footer text-center py-3">
                    <small class="text-muted">
                        Don't have an account? 
                        <a href="#" class="text-primary">Contact Admin</a>
                    </small>
                </div>
            </div>
            
            <div class="card mt-4 border-warning">
                <div class="card-header bg-warning text-dark">
                    <h6 class="mb-0">
                        <i class="fas fa-key me-2"></i>Demo Credentials
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <strong>SuperAdmin:</strong><br>
                            <small>admin / admin</small>
                        </div>
                        <div class="col-6">
                            <strong>Admin:</strong><br>
                            <small>admin@tradingbots.com / password123</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="login__block login__block--extended">
        <div class="row">
            <div class="col-xl-12">
                <div class="login__block__inner">
                    <div class="login__block__form">
                        <h4 class="text-uppercase">
                            <strong>Please log in</strong>
                        </h4>
                        <br />
                        <form id="form-validation" name="form-validation" method="POST">
                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input id="validation-email"
                                       class="form-control"
                                       placeholder="Email or Username"
                                       name="validation[email]"
                                       type="text"
                                       data-validation="[EMAIL]">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input id="validation-password"
                                       class="form-control password"
                                       name="validation[password]"
                                       type="password" data-validation="[L>=6]"
                                       data-validation-message="$ must be at least 6 characters"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <a href="javascript: void(0);" class="pull-right utils__link--blue utils__link--underlined">Forgot Password?</a>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="example6" checked>
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary mr-3">Sign In</button>
                                <span class="register-link">
                                    <a href="#" class="utils__link--blue utils__link--underlined">Register</a> if you don't have account
                                </span>
                            </div>
                            <div class="form-group">
                                <span>
                                    Use another service to Log In
                                </span>
                                <div class="mt-2">
                                    <a href="javascript: void(0);" class="btn btn-icon">
                                        <i class="icmn-facebook"></i>
                                    </a>
                                    <a href="javascript: void(0);" class="btn btn-icon">
                                        <i class="icmn-google"></i>
                                    </a>
                                    <a href="javascript: void(0);" class="btn btn-icon">
                                        <i class="icmn-windows"></i>
                                    </a>
                                    <a href="javascript: void(0);" class="btn btn-icon">
                                        <i class="icmn-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="login__block__sidebar">
                        <h4 class="login__block__sidebar__title">
                            <strong>TradingBot Pro</strong>
                            <br />
                            <span>2025</span>
                        </h4>
                        <div class="login__block__sidebar__item">
                            Advanced automated trading platform powered by AI algorithms. Execute trades 24/7 across 
                            multiple cryptocurrencies with precision and speed that humans simply cannot match.
                        </div>
                        <div class="login__block__sidebar__item">
                            Our intelligent bots analyze market patterns, technical indicators, and sentiment data 
                            to maximize your trading profits while minimizing risks.
                        </div>
                        <div class="login__block__sidebar__place">
                            <i class="icmn-location mr-3"><!-- --></i>
                            Global Markets, 24/7
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
    margin-top: 5rem;
}

.card-header {
    border-bottom: none;
}

.form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}
</style>
@endsection