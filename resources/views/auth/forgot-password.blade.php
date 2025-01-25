<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نسيت كلمة المرور</title>
    <style>
        /* الخطوط */
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap');

        /* التصميم العام */
        body {
            font-family: 'Tajawal', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .forgot-password-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(10px);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .forgot-password-container h2 {
            margin-bottom: 25px;
            color: #333;
            font-size: 28px;
            font-weight: 700;
        }

        .forgot-password-container .message {
            margin-bottom: 20px;
            color: #666;
            font-size: 14px;
        }

        .forgot-password-container form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .forgot-password-container input {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .forgot-password-container input:focus {
            border-color: #667eea;
            outline: none;
        }

        .forgot-password-container button {
            width: 90%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            transition: background 0.3s ease;
        }

        .forgot-password-container button:hover {
            background: linear-gradient(135deg, #764ba2, #667eea);
        }

        .forgot-password-container .login-link {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .forgot-password-container .login-link a {
            color: #667eea;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-password-container .login-link a:hover {
            color: #764ba2;
        }

        /* تأثيرات إضافية */
        .forgot-password-container {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="forgot-password-container">
        <h2>نسيت كلمة المرور</h2>
        <div class="message">
            نسيت كلمة المرور؟ لا مشكلة. فقط أخبرنا بريدك الإلكتروني وسنرسل لك رابطًا لإعادة تعيين كلمة المرور.
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif  
            <input type="email" name="email" placeholder="البريد الإلكتروني" required>
            <button type="submit">إرسال رابط إعادة التعيين</button>
        </form>
        <div class="login-link">
            <a href="{{ route('login') }}">العودة إلى تسجيل الدخول</a>
        </div>
    </div>
</body>
</html>