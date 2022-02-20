<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token) {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {

        //? Crear objeto Email
        $mail = new PHPMailer(TRUE);
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = TRUE;
        $mail->Username = '1a6753af42b0c8';
        $mail->Password = '403df7079bdfca';
        $mail->Port = 2525;
        
        $mail->setFrom('cuentas@appsalon.com', 'Mailer');
        $mail->addAddress($this->email, 'AppSalon.com');
        $mail->Subject = 'Cambia tu contraseña';

        //? Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . " </strong> 
        Has creado tu cuenta en App Salon, solo debes confirmarla haciendo
        clic en el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: 
        <a href='https://immense-ocean-13757.herokuapp.com/confirma-cuenta?token="
        . $this->token . "'>Confirmar Cuenta</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta puedes
        ignorar este mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        //? Enviar el mail
        if($mail->send()) {
            echo "Correo enviado correctamente";
        } else {
            echo "El correo no se pudo enviar";
        }
    }

    //! Resetear password email
    public function enviarInstrucciones() {

        //? Crear objeto Email
        $mail = new PHPMailer(TRUE);
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = TRUE;
        $mail->Username = '1a6753af42b0c8';
        $mail->Password = '403df7079bdfca';
        $mail->Port = 2525;
        
        $mail->setFrom('cuentas@appsalon.com', 'Mailer');
        $mail->addAddress($this->email, 'AppSalon.com');
        $mail->Subject = 'Cambia tu contraseña';

        //? Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . " </strong> 
        Si tu solicitaste cambiar tu contraseña puedes hacerlo haciendo
        clic en el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: 
        <a href='https://immense-ocean-13757.herokuapp.com/recuperar?token="
        . $this->token . "'>Cambiar contraseña</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cambio puedes
        ignorar este mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        //? Enviar el mail
        if($mail->send()) {
        } else {
            echo "El correo no se pudo enviar";
        }
    }
}