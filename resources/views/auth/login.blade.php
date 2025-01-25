<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link href="{{ URL::asset('assets/css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="login-container">
        <h2>تسجيل الدخول</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="البريد الإلكتروني">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <div class="password-container">
                <input type="password" name="password" id="password" placeholder="كلمة المرور" required>
                <span class="toggle-password" onclick="togglePassword('password', this)">
                    <i class="fas fa-eye"></i>
                </span>
            </div>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <button type="submit">تسجيل الدخول</button>
        </form>
        <br>
        <a href="{{ route('googlepage') }}" class="btn btn-google btn-block">
            <img src="{{ URL::asset('assets/img/google.png') }}" alt="Google Logo" class="google-logo">
            تسجيل الدخول باستخدام Google
        </a>
        <a href="{{ route('password.request') }}" class="forgot-password">نسيت كلمة المرور؟</a>
        <div class="register-link">
            ليس لديك حساب؟ <a href="{{ route('register') }}">سجل هنا</a>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.querySelector('.toggle-password i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye'); // إزالة أيقونة العين المفتوحة
                toggleIcon.classList.add('fa-eye-slash'); // إضافة أيقونة العين المغلقة
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash'); // إزالة أيقونة العين المغلقة
                toggleIcon.classList.add('fa-eye'); // إضافة أيقونة العين المفتوحة
            }
        }
    </script>
</body>

</html>
