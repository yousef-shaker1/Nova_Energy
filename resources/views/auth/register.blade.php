<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل حساب جديد</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/register.css') }}" rel="stylesheet">
</head>

<body>
    <div class="register-container">
        <h2>تسجيل حساب جديد</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="الاسم الكامل">
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <input type="email" name="email" placeholder="البريد الإلكتروني">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <div class="password-container">
                <input type="password" name="password" id="password" placeholder="كلمة المرور" required>
                <span class="toggle-password" onclick="togglePassword('password', this)">
                    <i class="fas fa-eye"></i>
                </span>
            </div>
            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <div class="password-container">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="تأكيد كلمة المرور" required>
                <span class="toggle-password" onclick="togglePassword('password_confirmation', this)">
                    <i class="fas fa-eye"></i>
                </span>
            </div>
            @error('password_confirmation')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <button type="submit">تسجيل</button>
        </form>
        <div class="login-link">
            لديك حساب بالفعل؟ <a href="{{ route('login') }}">سجل الدخول هنا</a>
        </div>
    </div>

    <script>
        function togglePassword(fieldId, toggleIcon) {
            const passwordInput = document.getElementById(fieldId);
            const icon = toggleIcon.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
