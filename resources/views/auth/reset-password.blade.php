<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إعادة تعيين كلمة المرور</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ URL::asset('assets/css/reset_password.css') }}" rel="stylesheet">

</head>
<body>
    <div class="reset-password-container">
        <h2>إعادة تعيين كلمة المرور</h2>
        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <input type="email" name="email" placeholder="البريد الإلكتروني" value="{{ old('email', $request->email) }}" required autofocus>
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <!-- Password -->
            <input type="password" name="password" placeholder="كلمة المرور الجديدة" required>
            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <!-- Confirm Password -->
            <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور الجديدة" required>
            @error('password_confirmation')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <button type="submit">إعادة تعيين كلمة المرور</button>
        </form>
        <div class="login-link">
            <a href="{{ route('login') }}">العودة إلى تسجيل الدخول</a>
        </div>
    </div>
</body>
</html>