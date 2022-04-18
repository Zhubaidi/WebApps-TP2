<?php

include "koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);

$cek_user = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username'");
$user_valid = mysqli_fetch_array($cek_user);

if($user_valid){
	if($password == $user_valid['password']){
		session_start();
		$_SESSION['username'] = $user_valid['username'];

			if($username == "admin"){
				header('location:dashboard.php');
			}			
	} else {
		echo "<script>alert('Login Gagal, Password salah');document.location='login.php'</script>";
	}
} else {
	echo "<script>alert('Login Gagal, Username tidak terdaftar');document.location='login.php'</script>";
}


$curlx = curl_init();

curl_setopt($curlx, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($curlx, CURLOPT_HEADER, 0);
curl_setopt($curlx, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curlx, CURLOPT_POST, 1);

$post_data = 
[
    'secret' => '6LdbwNYcAAAAAHgtP7s3uNc8ZYAeMT8ocLaXfUlL', //<--- your reCaptcha secret key
    'response' => $_POST['g-recaptcha-response']
];

curl_setopt($curlx, CURLOPT_POSTFIELDS, $post_data);

$resp = json_decode(curl_exec($curlx));

curl_close($curlx);

if ($resp->success) 
{
    //success!
} else 
{
    // failed
    echo "error";
    exit;
}


  // $secret = "6LdbwNYcAAAAAHgtP7s3uNc8ZYAeMT8ocLaXfUlL";
  // $responseKey =  $_POST['g-recaptcha-response'];

  // $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$responseKey";
  // $response = file_get_contents($url);
  // $response = json_decode($response);
  // if ($response->success)
  // 	header('location:dashboard.php');
  // else
  // 	echo "<script>alert('Captcha error');document.location='login.php'</script>";



?>