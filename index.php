<?php
echo '
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semangat Ya Deck!</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #a8edea, #fed6e3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .card {
            background-color: white;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border-radius: 15px;
            padding: 40px 60px;
            text-align: center;
            max-width: 500px;
            animation: fadeIn 1.5s ease;
        }
        h1 {
            color: #ff4081;
            margin-bottom: 10px;
        }
        p {
            color: #555;
            font-size: 1.1em;
            margin-bottom: 0;
        }
        span {
            display: block;
            margin-top: 20px;
            font-size: 0.9em;
            color: #888;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>💪 Selamat Datang di Halaman Pertama Yusuf!</h1>
        <p>Kamu hebat karena sudah sampai sejauh ini. Jangan menyerah!</p>
        <span>— @yusufftt_ 🚀</span>
    </div>
</body>
</html>
';
?>
