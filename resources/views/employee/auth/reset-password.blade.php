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
                            <form method="POST" action="{{ route('employee.password.store') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('メールアドレス') }}</label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        value="{{ old('email', $request->email) }}" placeholder="Enter your email" required autofocus
                                        autocomplete="username">
                                        @foreach ($errors as $error)
                                            {{ $error->get('email') }}
                                        @endforeach
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('パスワード') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="パスワードを入力してください。" required autocomplete="new-password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                    @foreach ($errors as $error)
                                    {{ $error->get('password') }}
                                @endforeach
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">{{ __('パスワード確認') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                                            placeholder="もう一度パスワードを入力してください。" required autocomplete="new-password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                    @foreach ($errors as $error)
                                    {{ $error->get('password_confirmation') }}
                                @endforeach
                                </div>

                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit">{{ __('Reset Password') }}</button>
                                </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
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

    @include('employee.inc.script')

</body>

</html>
