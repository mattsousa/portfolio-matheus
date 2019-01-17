<?php
  session_start();
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  if(
    isset($_POST['fullname_input']) &&
    isset($_POST['email_input']) &&
    isset($_POST['email_ok_input']) &&
    isset($_POST['select_reason']) &&
    isset($_POST['description_text'])){
      require_once '../vendor/autoload.php';

      $mail = new PHPMailer(true);
      var_dump($mail);
      echo "<br/>";
      echo "<br/>";
      try{
        $mail->isSMTP();
        $mail->Encoding = 'base64';
        $mail->CharSet = 'UTF-8';
        $mail->Host = 'email-ssl.com.br';
        $mail->SMTPAuth = true;
        $mail->Username = 'automatico@mattsousa.com.br';
        $mail->Password = 'Hookandbool23@';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = '465';
        $mail->setFrom( 'automatico@mattsousa.com.br', 'Portfólio do Matheus');
        $mail->addAddress($_POST['email_input']);
        $mail->isHTML(true);
        $mail->Subject = 'Confirmação de contato';
        $body = '***Mensagem Automática. Favor, Não responder!***';
        $body .= '<br>';
        $body .= '<br>';
        $body .= '<br>';
        $body .= '<b>Nome:</b> ' . $_POST['fullname_input'];
        $body .= '<br>';
        $body .= '<b>Email:</b> ' . $_POST['email_input'];
        $body .= '<br>';
        $body .= '<b>Motivo:</b> ';
        if($_POST['select_reason'] == '1'){
          $body .= 'Contratar para fazer um website';
        }else if($_POST['select_reason'] == '2'){
          $body .= 'Contratar para fazer um app android';
        }else if($_POST['select_reason'] == '3'){
          $body .= 'Mapear requisitos de um serviço';
        }else if($_POST['select_reason'] == '0'){
          $body .= 'Outro motivo';
        }
        $body .= '<br>';
        $body .= '<b>Descrição:</b> ' . $_POST['description_text'];
        $mail->Body = $body;
        $mail->send();
        $_SESSION['email'] = True;
        header('Location: /index.php');
      }catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        $_SESSION['email'] = False;
      }
  }else{
    echo "Error";
  }
?>
