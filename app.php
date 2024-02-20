<?php
$recaptcha_secret = "6Lf-CnopAAAAAJPMsgXxvbZ9AcZODyAbsJ3BPIK2";
$recaptcha_response = $_POST['g-recaptcha-response'];

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
$response_keys = json_decode($response, true);

if (intval($response_keys["success"]) !== 1) {
    // reCAPTCHA verification failed
    echo "Please solve the CAPTCHA correctly.";
} else {
    // reCAPTCHA verification successful, proceed with your logic
    echo "CAPTCHA verification successful!";
}
?>
