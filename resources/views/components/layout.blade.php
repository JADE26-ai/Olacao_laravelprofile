<!DOCTYPE html>
<html>
<head>
    <title>Profile Generator</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #0f0e17;
            color: #fffffe;
            min-height: 100vh;
            padding: 40px 20px;
        }

        body::before {
            content: '';
            position: fixed;
            top: -200px;
            left: -200px;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255, 107, 107, 0.15), transparent 70%);
            pointer-events: none;
            z-index: 0;
        }

        body::after {
            content: '';
            position: fixed;
            bottom: -200px;
            right: -200px;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255, 198, 107, 0.1), transparent 70%);
            pointer-events: none;
            z-index: 0;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            letter-spacing: -1px;
            text-align: center;
            margin-bottom: 40px;
            background: linear-gradient(135deg, #fffffe 0%, #ff6b6b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            z-index: 1;
        }

        h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            color: #ffc66b;
            margin: 40px 0 20px;
        }

        form {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 36px;
            max-width: 620px;
            margin: 0 auto 40px;
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1;
        }

        label {
            display: block;
            font-size: 0.78rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #a8a4b8;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 10px;
            color: #fffffe;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.95rem;
            margin-bottom: 18px;
            transition: border-color 0.2s, background 0.2s;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        textarea:focus,
        select:focus {
            border-color: #ff6b6b;
            background: rgba(255, 107, 107, 0.08);
        }

        select option {
            background: #1a1a2e;
            color: #fffffe;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        div > label {
            margin-top: 4px;
        }

        .btn {
            display: inline-block;
            padding: 13px 32px;
            background: linear-gradient(135deg, #ff6b6b, #ffc66b);
            color: #0f0e17;
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            font-size: 0.95rem;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: transform 0.2s, opacity 0.2s;
            margin-top: 8px;
            letter-spacing: 0.5px;
        }

        .btn:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }

        .btn:active {
            transform: translateY(0);
        }

        hr {
            border: none;
            border-top: 1px solid rgba(255,255,255,0.08);
            margin: 40px auto;
            max-width: 620px;
        }

        .card {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 28px 32px;
            max-width: 620px;
            margin: 0 auto 20px;
            position: relative;
            z-index: 1;
            transition: border-color 0.2s, transform 0.2s;
        }

        .card:hover {
            border-color: rgba(255, 107, 107, 0.3);
            transform: translateY(-2px);
        }

        .card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: #fffffe;
            margin-bottom: 14px;
        }

        .card p {
            font-size: 0.9rem;
            color: #a8a4b8;
            margin-bottom: 8px;
            line-height: 1.6;
        }

        .card p strong {
            color: #ffc66b;
            font-weight: 500;
        }

        .card ul {
            padding-left: 20px;
            color: #a8a4b8;
            font-size: 0.9rem;
        }

        .card ul li {
            margin-bottom: 4px;
        }

        p { position: relative; z-index: 1; color: #a8a4b8; }

        h2 { position: relative; z-index: 1; }

        form[method="POST"]:last-of-type {
            background: transparent;
            border: none;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Personal Profile Generator</h1>
    {{ $slot }}
</body>
</html>