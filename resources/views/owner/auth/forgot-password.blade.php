<!DOCTYPE html>
<html lang="ja">

<head>
    @include('owner.inc.head')
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
                                <p class="text-muted mb-4 mt-3">Eメールアドレスを入力してください。パスワードをリセットする手順を記載したEメールをお送りします。</p>
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
                            <form method="POST" action="{{ route('owner.password.email') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        value="{{ old('email') }}" placeholder="Enter your email" required autofocus>
                                </div>
                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit"> {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-white-50">Back to <a href="{{ route('owner.login') }}"
                                    class="text-white ms-1"><b>{{ __('Log In') }}</b></a></p>
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
        </script> &copy; Smart Sprouts theme by <a href="https://katsucode.jp/"
            class="text-white-50">Katsucode</a>
    </footer>

    @include('owner.inc.script')

</body>

</html>
