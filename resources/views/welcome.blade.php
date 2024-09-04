<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الشيخ</title>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Reem Kufi', sans-serif;
            background-color: #004d40;
            color: white;
            text-align: center;
            padding: 50px;
            margin: 0;
        }
        .title {
            font-family: 'Scheherazade New', serif;
            font-size: 48px;
            font-weight: bold;
            color: #ffd700;
        }
        .paragraph {
            font-family: 'Scheherazade New', serif;
            font-size: 24px;
            margin: 20px 0;
        }
        .button {
            display: inline-block;
            background-color: #ffa000;
            color: white;
            padding: 15px 30px;
            font-size: 24px;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s;
            cursor: pointer;
        }
        .button:hover {
            background-color: #ff8f00;
        }
    </style>
</head>
<body dir="rtl">

<h1 class="title">الشيخ</h1>
<p class="paragraph">الشيخ لقطع غيار المحمول<br>نوفر لك أفضل وأجود قطع غيار المحمول بأسعار منافسة وخدمة موثوقة. تفضل بزيارة متجرنا للحصول على كل ما تحتاجه لجهازك.</p>
<a href="{{ route('dashboard.dashboard') }}" class="button">السيستم</a>

</body>
</html>
