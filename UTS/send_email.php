<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "rmdnidkry@gmail.com";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    echo "Pesan berhasil dikirim!";
} else {
    echo "Tolong isi form dengan benar.";
}
?>