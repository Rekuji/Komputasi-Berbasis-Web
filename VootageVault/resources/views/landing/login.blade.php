<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login VootageVault</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="wholebody">
        <div class="form-structor">
            <div class="signup">
                <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-holder">
                        <input type="text" class="input" name="name" placeholder="Name" required />
                        <input type="email" class="input" name="email" placeholder="Email" required />
                        <input type="password" class="input" name="password" placeholder="Password" required />
                        <input type="password" class="input" name="password_confirmation" placeholder="Confirm Password" required />
                    </div>
                    <button type="submit" class="submit-btn">Sign up</button>
                </form>
            </div>
            <div class="login slide-up">
                <div class="center">
                    <h2 class="form-title" id="login"><span>or</span>Log in</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-holder">
                            <input type="email" class="input" name="email" placeholder="Email" required />
                            <input type="password" class="input" name="password" placeholder="Password" required />
                        </div>
                        <button type="submit" class="submit-btn">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>