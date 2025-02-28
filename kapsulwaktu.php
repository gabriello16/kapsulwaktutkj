<?php 

$lastday = mktime(0, 0, 0, 2, 26, 2025);  
$secondpassed = time() - $lastday;  
$daypassed = floor($secondpassed / 60 / 60 / 24);  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KapsulWaktu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #66B3FF 0%, #0099FF 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
            margin: 0;
        }

        h2 {
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 320;
            margin-bottom: 1rem;
        }

        h1 {
            color: white;
            text-align: center;
            font-size: 6rem;
            font-weight: 400;
            margin-bottom: 2rem;
        }
        p {
            color:white;
            text-align: center;
            line-height: 7px;
            font-size : 1rem;
            font-weight: 300;
        }

        .video-container {
            width: 480px;  /* Increase width */
            height: 270px; /* Increase height to maintain 16:9 ratio */
            background-color: black;
            margin-top: 2rem;
        }

        video {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>

<body>
<p></p>
    <p></p>
    <p></p>
    <h2>Berapa hari yang telah berlalu semenjak KBM terakhir angkatan 2025?</h2>
    <h1><?=$daypassed?> Hari</h1>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="video-container">
        <video controls>
            <source src="video1.mp4" type="video/mp4">
        </video>
    </div>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <h2>26 Februari 2025</h2>
    <p></p>
    <p></p>
    <p>"Hari rabu untuk 12 tkj yang diawali dengan pelajaran bahasa indonesia bu Suci.</p>
    <p>diawali dengan jam kosong setelah itu bu Suci mencocokkan jawaban di lks</p>
    <p>setelah itu pelajaran bahasa inggris Mam Lina, Mam Lina memberikan contoh soal </p>
    <p>yang akan keluar di ujian psat. sebagian anak ada yang terjebak macet, ada yang</p>
    <p>pulang, tapi ada satu anak yang tetap masuk jam dan baru tiba di jam 10.</p>
    <p>setalah istirahat mapel pak Vulkan jamkos, anak anak bermain di kelas.</p>
    <p>mapel Pak Sofi hanya mengembalikkan router mikrotik yang dipinjamkan ke kami.</p>
    <p>setelah sholat dzuhur adalah mapel bu Nita, kami membagikan uang kas kelas, dan </p>
    <p>diakhir mapel saat mau pulang kita membuat konten kelas ini. kemudia hari diakhiri</p>
    <p>dengan makan gacoan bersama satu."</p>
    <p></p>
    <p></p>
</body>
</html>
