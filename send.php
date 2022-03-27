<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
// $mail = new PHPMailer(true); //Argument true in constructor enables exceptions
	if (!empty($_POST)) {
		# code...
		$to                 = $_POST['to'];
        $subject            = $_POST['subject'];
        $message            = $_POST['message'];
 
        $mail = new PHPMailer(true);
 
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.googlemail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'racorp.pubg@gmail.com'; // ubah dengan alamat email Anda
            $mail->Password   = 'pr0dukd3V'; // ubah dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
 
            $mail->setFrom('racorp.pubg@gmail.com', 'Kirim Email '); // ubah dengan alamat email Anda
            $mail->addAddress($to);
            $mail->addReplyTo('racorp.pubg@gmail.com', ' Kirim Email '); // ubah dengan alamat email Anda
 
            // Isi Email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;
 
            $mail->send();
 
         // Pesan Berhasil Kirim Email/Pesan Error
 
            // session()->setFlashdata('success', 'Selamat, email berhasil terkirim!');
            header("location: index.html", true, 301);;
        } catch (Exception $e) {
            // session()->setFlashdata('error', "Gagal mengirim email. Error: " . $mail->ErrorInfo);
            header("location: index.html", true, 301);;
        }

	}
?>

 
