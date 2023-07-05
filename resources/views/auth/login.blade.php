<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Session Status -->
                    <!-- Replace Blade syntax with regular HTML -->
                    <div class="mb-4">
                        <!-- Add your session status message here -->
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                            <!-- Display input errors -->
                            <div class="mt-2">
                                <!-- Add your input error messages here -->
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control">
                            <!-- Display input errors -->
                            <div class="mt-2">
                                <!-- Add your input error messages here -->
                            </div>
                        </div>
                        <!-- Remember Me -->
                        <div class="form-check mb-3">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <label for="remember_me" class="form-check-label">
                                <span class="text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                            </label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <!-- Forgot Password Link -->
                            <a class="text-sm text-decoration-underline" href="{{ route('password.request') }}">Forgot your password?</a>
                            <!-- Log In Button -->
                            <button class="btn btn-primary ms-3" type="submit">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
