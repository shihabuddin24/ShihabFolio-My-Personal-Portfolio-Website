<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 50%, #0f172a 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Plus Jakarta Sans', sans-serif;
            padding: 1.5rem;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.97);
            max-width: 440px;
            width: 100%;
            border-radius: 20px;
            padding: 2.8rem 2.5rem 2.5rem;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.45), 0 8px 20px rgba(15, 82, 148, 0.25);
        }

        .login-icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, #1e40af, #3b82f6);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.4rem;
        }

        .login-icon svg {
            width: 28px;
            height: 28px;
            fill: white;
        }

        h2 {
            font-size: 1.6rem;
            font-weight: 700;
            color: #0f172a;
            text-align: center;
            margin-bottom: 0.35rem;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            font-size: 0.88rem;
            margin-bottom: 2rem;
        }

        .form-label {
            font-size: 0.82rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.4rem;
            letter-spacing: 0.02em;
            text-transform: uppercase;
        }

        .form-control {
            height: 46px;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            font-size: 0.95rem;
            padding: 0 14px;
            color: #1e293b;
            transition: border-color 0.2s, box-shadow 0.2s;
            background: #f8fafc;
        }

        .form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
            background: #fff;
            outline: none;
        }

        .form-control::placeholder {
            color: #a0aec0;
        }

        .input-icon-wrap {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 13px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 17px;
            pointer-events: none;
        }

        .form-control.has-icon {
            padding-left: 40px;
        }

        .btn-links-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.1rem;
            margin-bottom: 1.6rem;
        }

        .btn-home {
            font-size: 0.82rem;
            font-weight: 500;
            color: #475569;
            background: none;
            border: 1.5px solid #e2e8f0;
            border-radius: 8px;
            padding: 7px 14px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .btn-home:hover {
            background: #f1f5f9;
            border-color: #cbd5e1;
            color: #1e293b;
        }

        .btn-forgot {
            font-size: 0.82rem;
            font-weight: 500;
            color: #3b82f6;
            background: none;
            border: none;
            cursor: pointer;
            text-decoration: none;
            padding: 0;
            transition: color 0.2s;
        }

        .btn-forgot:hover {
            color: #1d4ed8;
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            height: 48px;
            background: linear-gradient(135deg, #1e40af, #3b82f6);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            letter-spacing: 0.02em;
            transition: transform 0.15s, box-shadow 0.2s;
            box-shadow: 0 4px 14px rgba(59, 130, 246, 0.4);
        }

        .btn-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.5);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .divider {
            border-top: 1.5px solid #f1f5f9;
            margin: 1.5rem 0 0;
        }

        .footer-note {
            text-align: center;
            margin-top: 1.1rem;
            font-size: 0.8rem;
            color: #94a3b8;
        }

        @media (max-width: 480px) {
            .login-box {
                padding: 2rem 1.4rem 1.8rem;
            }

            h2 {
                font-size: 1.4rem;
            }
        }
    </style>
</head>

<body>

    <div class="login-box">
        <div class="login-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm0 3a3 3 0 1 1-3 3 3 3 0 0 1 3-3Zm0 14.2a7.2 7.2 0 0 1-6-3.22c.03-2 4-3.08 6-3.08s5.97 1.08 6 3.08a7.2 7.2 0 0 1-6 3.22Z" />
            </svg>
        </div>
        <h2>Login to Dashboard</h2>
        <p class="subtitle">Enter your credentials to access your account</p>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <div class="input-icon-wrap">
                <span class="input-icon">✉</span>
                <input type="email" class="form-control has-icon" placeholder="you@example.com">
            </div>
        </div>

        <div class="mb-0">
            <label class="form-label">Password</label>
            <div class="input-icon-wrap">
                <span class="input-icon">🔒</span>
                <input type="password" class="form-control has-icon" placeholder="Enter your password">
            </div>
        </div>

        <div class="btn-links-row">
            <a href="#" class="btn-home">← Back to Home</a>
            <a href="#" class="btn-forgot">Forgot Password?</a>
        </div>

        <button class="btn-login">Login →</button>

        <div class="divider"></div>
        <p class="footer-note">Protected with end-to-end encryption</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
