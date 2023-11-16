<!DOCTYPE html>
<html lang="ja">

<head>
    @include('employee.inc.head')
</head>

<body class="authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">Smart Sprouts</div>
                                <p class="text-muted mb-4 mt-3">{{__('オーナー専用画面にアクセスするには、メールアドレスとパスワードを入力してください。')}}</p>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('employee.login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('メールアドレス') }}</label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        value="{{ old('email') }}" placeholder="Enter your email" required autofocus
                                        autocomplete="username">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('パスワード') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="Enter your password" required autocomplete="current-password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remmber_me" name="remember">
                                        <label class="form-check-label"
                                            for="remmber_me">{{ __('Remember me') }}</label>
                                    </div>
                                </div>

                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit">{{ __('Log In') }}</button>
                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            @if (Route::has('employee.password.request'))
                                <p> <a href="{{ route('employee.password.request') }}"
                                        class="text-white-50 ms-1">{{ __('パスワードをお忘れですか？') }}</a></p>
                            @endif
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2023 -
        <script>
            document.write(new Date().getFullYear())
        </script> &copy; Smart Sprouts theme by <a href="https://katsucode.jp/" class="text-white-50">Katsucode</a>
    </footer>

    @include('employee.inc.script')

</body>

</html>
