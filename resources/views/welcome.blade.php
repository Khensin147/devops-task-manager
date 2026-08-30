<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WEB AMBAJAT</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #111827, #1e293b, #0f172a);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 30%, rgba(168, 85, 247, 0.25), transparent 25%),
                radial-gradient(circle at 80% 70%, rgba(59, 130, 246, 0.25), transparent 25%);
            z-index: -1;
        }

        .container {
            width: 90%;
            max-width: 900px;
            text-align: center;
            padding: 60px 30px;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
        }

        .badge {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 50px;
            background: #22c55e;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        h1 {
            font-size: clamp(50px, 10vw, 100px);
            letter-spacing: 5px;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #a855f7, #3b82f6, #22c55e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .subtitle {
            font-size: 22px;
            color: #cbd5e1;
            margin-bottom: 35px;
        }

        .status {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .card {
            width: 180px;
            padding: 20px;
            border-radius: 15px;
            background: rgba(15, 23, 42, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .card h3 {
            color: #22c55e;
            margin-bottom: 10px;
        }

        .card p {
            color: #94a3b8;
            font-size: 14px;
        }

        .button {
            display: inline-block;
            margin-top: 35px;
            padding: 15px 30px;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            background: linear-gradient(90deg, #a855f7, #3b82f6);
            transition: 0.3s;
        }

        .button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(59, 130, 246, 0.4);
        }

        .footer {
            margin-top: 35px;
            color: #64748b;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="background"></div>

<div class="container">

    <div class="badge">
        🚀 CI/CD PIPELINE ACTIVE
    </div>

    <h1>AMBAJAT</h1>

    <p class="subtitle">
        Welcome to the legendary Ambajat Web 🚀
    </p>

    <div class="status">

        <div class="card">
            <h3>GitHub</h3>
            <p>Source code repository connected.</p>
        </div>

        <div class="card">
            <h3>Jenkins</h3>
            <p>Automatic build pipeline enabled.</p>
        </div>

        <div class="card">
            <h3>Docker</h3>
            <p>Application deployed in container.</p>
        </div>

    </div>

    <a href="#" class="button">
        AMBAJAT MODE 🚀
    </a>

    <div class="footer">
        Powered by Laravel • Docker • Jenkins • GitHub Webhook
    </div>

</div>

</body>
</html>