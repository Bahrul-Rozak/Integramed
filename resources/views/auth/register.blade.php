<!-- Bootstrap 5 CDN Links -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<div class="container-fluid clinic-login-container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card clinic-login-card border-0 shadow-lg">
                <div class="card-body p-5">
                    <!-- Clinic Header -->
                    <div class="text-center mb-5">
                        <div class="clinic-logo mb-4">
                            <i class="fas fa-hospital-alt fa-4x text-primary"></i>
                        </div>
                        <h2 class="fw-bold text-primary">Create Clinic Account</h2>
                        <p class="text-muted">Register for admin access</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                        @csrf

                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-user text-muted"></i>
                                </span>
                                <input id="name" class="form-control form-control-lg"
                                    type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="name"
                                    placeholder="Enter your full name">
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger small" />
                        </div>

                        <!-- Email Address -->
                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-envelope text-muted"></i>
                                </span>
                                <input id="email" class="form-control form-control-lg"
                                    type="email" name="email"
                                    :value="old('email')" required autocomplete="username"
                                    placeholder="Enter your email">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger small" />
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-lock text-muted"></i>
                                </span>
                                <input id="password" class="form-control form-control-lg"
                                    type="password" name="password" required
                                    autocomplete="new-password" placeholder="Create password">
                                <button class="btn btn-outline-secondary toggle-password" type="button">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger small" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-lock text-muted"></i>
                                </span>
                                <input id="password_confirmation" class="form-control form-control-lg"
                                    type="password" name="password_confirmation" required
                                    autocomplete="new-password" placeholder="Confirm password">
                                <button class="btn btn-outline-secondary toggle-password" type="button">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger small" />
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold">
                                <i class="fas fa-user-plus me-2"></i> Register
                            </button>
                        </div>

                        <div class="text-center">
                            <p class="text-muted mb-0">Already have an account?</p>
                            <a class="text-decoration-none fw-semibold" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt me-1"></i> Sign in instead
                            </a>
                        </div>
                    </form>
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

    .form-control-lg {
        padding: 0.75rem 1rem;
        font-size: 1rem;
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

    .toggle-password {
        cursor: pointer;
    }

    .input-group-text {
        transition: all 0.3s;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        border-color: #bac8f3;
    }

    a {
        color: #4e73df;
        transition: all 0.2s;
    }

    a:hover {
        color: #2e59d9;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(function(button) {
        button.addEventListener('click', function() {
            const passwordInput = this.closest('.input-group').querySelector('input');
            const icon = this.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
</script>