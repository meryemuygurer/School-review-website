<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Font Değiştirme</title>
    <style>
        * {
            font-family: 'Arial', sans-serif;
            font-size: 15px;
        }
        body{
            width: 100%;
            height: 100vh;
            background-color: rgb(247, 232, 247);
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $university = $_POST['universities'];
    $graduateLevel = $_POST['graduate-level'];
    $graduated = $_POST['graduated'] ?? ''; // Eğer Okumadım/Okmuyorum option'ını seçerse graduated değeri hiç seçilmemiş olacak. O koşulda hata vermemesi için boş string olarak ayarladım.
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];

    echo "Adınız: " . htmlspecialchars($name) . "<br>"; 
    echo "Soy Adınız: " . htmlspecialchars($lastname) . "<br>"; 
    echo "Kullanıcı Adınız: " . htmlspecialchars($username) . "<br>"; 

    $universities = [
        'marmara' => 'Marmara Üniversitesi',
        'medeniyet' => 'Medeniyet Üniversitesi',
        'yildiz' => 'Yıldız Teknik Üniversitesi',
        'bogazici' => 'Boğaziçi Üniversitesi'
    ];

    if($graduateLevel === 'no'){
        echo "Üyelik tipiniz: Aday Öğrenci";
    } elseif($graduateLevel === 'yes'){
        if($graduated === 'mezun'){
            echo "<p class='custom-font'>$universities[$university]'nden mezunsunuz.$username</p>";
        } elseif($graduated === 'mezun-degil'){
            echo "<p class='custom-font'>$universities[$university]'nde öğrencisiniz.$username</p>";
        }
    }
}
?>
</body>
</html>