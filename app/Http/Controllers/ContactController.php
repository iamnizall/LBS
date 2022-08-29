<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMPT;
use PHPMailer\PHPMailer\Exception;


class ContactController extends Controller
{
    function index(){
        return view('components.email');
    }
    function send(Request $request){
        $name = $request ->name;
        $email= $request ->email;
        $subject = $request ->subject;
        $message = $request ->message;

        require 'PHPMailer/vendor/autoload.php';
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;                                      
        $mail->isSMTP();                                          
        $mail->Host       = 'smtp.googlemail.com';                        
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'testmaillaravel12@gmail.com';                  
        $mail->Password   = 'xbmdvczculsayegp';                              
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = 587;
        $mail->setFrom($email, $name); 
        $mail->addAddress('testmaillaravel12@gmail.com');
        $mail->isHTML(true);  
        $mail->Subject =  $subject;
        $mail->Body    = $message;
        $dt = $mail->send();
        if($dt){
            return back()->with('status', 'Email Telah Terkirim');
        } else{
            echo 'Something went wrong';
        }

    }
    
}
