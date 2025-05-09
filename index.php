<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>عمر بن الخطاب</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri&family=Tajawal:wght@400;700&display=swap');

        body {
            margin: 0;
            padding: 0;
            background-image: url('https://www.transparenttextures.com/patterns/arabesque.png');
            background-color: #fef6e4;
            font-family: 'Tajawal', sans-serif;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 50px 20px;
            min-height: 100vh;
        }

        .scroll {
            width: 100%;
            max-width: 1000px;
            background: linear-gradient(135deg, #fffdf5, #fef6e4);
            border: 5px solid #d4af37;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 50px;
            position: relative;
            overflow: hidden;
        }

        .scroll:before, .scroll:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 40px;
            background: repeating-linear-gradient(45deg, #d4af37, #d4af37 10px, transparent 10px, transparent 20px);
            opacity: 0.3;
        }

        .scroll:before {
            top: 0;
            left: 0;
        }

        .scroll:after {
            bottom: 0;
            left: 0;
        }

        .scroll h1 {
            font-family: 'Amiri', serif;
            font-size: 2.8em;
            color: #8b5e3c;
            text-align: center;
            margin-bottom: 30px;
        }

        .section {
            margin-top: 35px;
        }

        .section-title {
            font-size: 1.5em;
            color: #4e342e;
            background-color: #fff8e1;
            border: 2px solid #d4af37;
            padding: 12px 20px;
            border-radius: 12px;
            display: inline-block;
            font-weight: bold;
            margin-bottom: 15px;
            position: relative;
        }

        .section-title::before {
            content: "✶";
            margin-left: 10px;
            color: #d4af37;
        }

        .section p {
            font-size: 1.2em;
            line-height: 2;
            color: #333;
            text-align: justify;
            background: #fdfaf2;
            padding: 20px;
            border-radius: 10px;
            box-shadow: inset 0 0 10px rgba(0,0,0,0.05);
        }

        .sword {
            display: block;
            margin: 0 auto 20px auto;
            width: 100px;
            filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.2));
        }

        @media (max-width: 600px) {
            .scroll {
                padding: 25px;
            }

            .scroll h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>

<?php
$host = 'sql308.infinityfree.com';
$user = 'if0_38924085';
$password = 'OmarAlathab';
$dbname = 'if0_38924085_db';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
$conn->set_charset("utf8");

$result = $conn->query("SELECT * FROM companions WHERE name = 'عمر بن الخطاب'");
$companion = $result->fetch_assoc();
?>

<div class="scroll">
    <img src="sh.jpg" alt="سيف" class="sword">
    <h1><?php echo $companion['name']; ?></h1>

    <div class="section">
        <div class="section-title">📜 نبذة عامة</div>
        <p><?php echo nl2br($companion['biography']); ?></p>
    </div>

    <div class="section">
        <div class="section-title">🕌 إسلامه</div>
        <p><?php echo nl2br($companion['islam']); ?></p>
    </div>

    <div class="section">
        <div class="section-title">🚶‍♂️ هجرته</div>
        <p><?php echo nl2br($companion['migration']); ?></p>
    </div>

    <div class="section">
        <div class="section-title">🕯️ وفاته</div>
        <p><?php echo nl2br($companion['death']); ?></p>
    </div>
</div>

</body>
</html>
