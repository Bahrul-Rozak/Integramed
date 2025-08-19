<!-- Bootstrap 5 CDN Links -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<div class="container-fluid clinic-login-container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card clinic-login-card border-0 shadow-lg">
                <div class="card-body p-5">
                    <!-- Clinic Header -->
                    <div class="text-center mb-4">
                        <div class="clinic-logo mb-3">
                            <i class="fas fa-hospital-alt fa-4x text-primary"></i>
                        </div>
                        <h2 class="fw-bold text-primary">Verify Your Email</h2>
                        <p class="text-muted">One last step to access your clinic admin account</p>
                    </div>

                    <div class="alert alert-info mb-4">
                        <i class="fas fa-envelope-open-text me-2"></i>
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>

                    @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success mb-4">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                    @endif

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <form method="POST" action="{{ route('verification.send') }}" class="mb-0">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane me-2"></i> {{ __('Resend Verification Email') }}
                            </button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}" class="mb-0">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary">
                                <i class="fas fa-sign-out-alt me-2"></i> {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .clinic-login-container {
        background: linear-gradient(135deg, #f5f7fa 0%, #e4f1fe 100%);
    }

    .clinic-login-card {
        border-radius: 15px;
        overflow: hidden;
        background-color: rgba(255, 255, 255, 0.95);
    }

    .clinic-logo {
        color: #4e73df;
        background-color: #f8f9fc;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }

    .btn-primary {
        background-color: #4e73df;
        border-color: #4e73df;
        transition: all 0.3s;
    }

    .btn-primary:hover {
        background-color: #2e59d9;
        border-color: #2653d4;
        transform: translateY(-1px);
    }

    .alert {
        border-left: 4px solid;
    }

    .alert-info {
        border-left-color: #4e73df;
    }

    .alert-success {
        border-left-color: #1cc88a;
    }

    .btn-outline-secondary {
        transition: all 0.3s;
    }

    .btn-outline-secondary:hover {
        background-color: #f8f9fc;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>