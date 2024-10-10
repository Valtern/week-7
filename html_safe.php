<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['input'])) {
    $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');

    echo "Input yang disaring : " . $input . "<br><br>";

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email yang dimasukkan : " . $email;
        } else {
            echo "Email yang dimasukkan tidak valid.";
        }
    }
} else {
    echo "Harap berikan input yang valid.<br><br>";
}
?>