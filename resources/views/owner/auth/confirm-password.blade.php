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
                                <p class="text-muted mb-4 mt-3">{{__('これはアプリケーションの安全なエリアです。続行する前にパスワードを確認してください。')}}</p>
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
                            <form method="POST" action="{{ route('owner.password.confirm') }}">
                                @csrf
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
                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit">{{ __('Confirm') }}</button>
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
        </script> &copy; Smart Sprouts theme by <a href="https://katsucode.jp/" class="text-white-50">Katsucode</a>
    </footer>

    @include('owner.inc.script')

</body>

</html>
