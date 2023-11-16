<!DOCTYPE html>
<html lang="ja">

<head>
    @include('admin.inc.head')
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
                                <p class="text-muted mb-4 mt-3">
                                    {{ __('ご登録ありがとうございます！登録を始める前に、先ほどお送りしたリンクをクリックしてメールアドレスを確認していただけますか？もしメールを受け取らなかった場合は、喜んで別のメールをお送りします。') }}
                                </p>
                                @if (session('status') == 'verification-link-sent')
                                    <p class="text-muted mb-4 mt-3">
                                        {{ __('会員登録時に入力されたメールアドレスに、新しい認証リンクが送信されました。') }}
                                    </p>
                                @endif
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
                            <form method="POST" action="{{ route('admin.verification.send') }}">
                                @csrf
                                <div class="text-center d-grid">
                                    <button class="btn btn-primary"
                                        type="submit">{{ __('Resend Verification Email') }}</button>
                                </div>
                            </form>
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <button class="btn btn-primary" type="submit">{{ __('Log Out') }}</button>
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

    @include('admin.inc.script')

</body>

</html>
