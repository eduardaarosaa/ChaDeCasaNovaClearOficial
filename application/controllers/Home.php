<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'libs/mailer/PHPMailer.php';
include 'libs/mailer/SMTP.php';
include 'libs/mailer/ExceptionC.php';

use models\HomeModel;


class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('HomeModel');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$retornoPresentes['data'] = $this->HomeModel->getPresente();
		$this->load->view('home.php', $retornoPresentes);

	}

	public function getConfirm(){
		$this->load->helper('url');
		$data = array(
			'id_produto' => $this->input->post('id_produto'),
			'nome_confirmado' => $this->input->post('nome_confirmado'),
			'email' => $this->input->post('email')
		);
		$retornoConfirm = $this->HomeModel->getConfirm($data);

		$idProduto =  $this->input->post('id_produto');
		$nomeConfirmado = $this->input->post('nome_confirmado');
		$email = $this->input->post('email');
		if($retornoConfirm) {
			$updateProduto = $this->getUpdatePresente($idProduto, $nomeConfirmado, $email);

			if($updateProduto) {
				echo "<script>
					alert('Confirmada a sua presença em meu chá (:');
					</script>";
				redirect("", 'refresh');
			}else{
				echo 'Error';
			}

		}
	}

	public function getPresentesAll(){

		$this->load->helper('url');
		$this->load->helper('form');
		$retornoPresentes['data'] = $this->HomeModel->getPresente();
		$this->load->view('presentes.php', $retornoPresentes);
	}

	public function getUpdatePresente($idProduto, $nomeConfirmado, $email){
		$data = array('id' => $idProduto
		);

		$update = $this->HomeModel->getUpdatePresente($data);
		if($update){
			$sendEmail = $this->sendEmail($nomeConfirmado,$email);
			if($sendEmail == true){
				var_dump('Enviado com sucesso!').die();
			}
			return true;
		}else{
			var_dump('error').die();
			return false;
		}
	}

	public function sendEmail($nomeConfirmado,$email){
			$emailDestinary = $email;
			$destiny = $emailDestinary;
			$reply = "Resposta";
			$subject = "Chá de Casa Nova da Duda (:";
			$altBody = 'Chá de Casa Nova da Duda (:';
			$html = '<!DOCTYPE html>
                <html>
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" CHARSET="UTF-8">
                </head>
                <body>
                <!-- cabecalho -->
                   <div>
                <div align="center">
                <tbody><tr style="height:63.75pt;">
                <td colspan="3" style="background-color:#303363 !important;height:63.75pt;padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;background-color:#303363 !important;">
                <span style="color:white;font-family:inherit;font-size: 24pt;">Chá de Casa Nova da Duda </span></p>
                </td>
                </tr>
                <tr>
                <td style="background-color:white;padding:0;border-style:none solid;border-right-width:1pt;border-left-width:1pt;border-right-color:#CCCCCC;border-left-color:#CCCCCC;">
                <div align="center">
                <table border="0" cellspacing="0" cellpadding="0" style="width:650px;">
                <tbody><tr>
              
                <td style="padding:50px;">
                <p><b><span style="color:#303363;font-size:13.5pt;font-family:Montserrat;">Olá, ' . $nomeConfirmado .'</span></b></p>
                <p style="font-size:11pt;font-family:Calibri,sans-serif;margin:0;"><span style="font-family:Montserrat;">&nbsp;</span></p>
                <p><span style="font-size:11.5pt;font-family:inherit; color: #303363">Muito Obrigada por confirmar sua presença em meu chá de casa nova.<br>
                <br>
                Será dia XX de XXX de 2020 as 00h00, no UP LAGO DOS PATOS no salão de festas, no endereço:
                R. Francisco Pereira, 466 - Vila Galvão.
               	</p>
                </td>
                </tr>
                </tbody></table>
                </div>
                </td>
                <td style="padding:0;"></td>
                <td style="padding:0;"></td>
                </tr>
                <tr style="background-color: #ff7979">
                <td style="background-color:#ff7979;padding:22.5pt 0;">
                <div align="center">
                <table border="0" cellspacing="0" cellpadding="0" style="width:382.5pt;">
                <tbody><tr>
              
                </tr>
                <tr>
                <td colspan="5" style="padding:0;">
                <div style="margin-top:24.75pt;margin-bottom:24.75pt; font-family: inherit;">
                <div align="center" style="font-size:11pt;font-family:inherit,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;">
                <hr align="center" width="100%" size="2" style="color:#969696;">
                </span></div>
                <div style="color:white;margin-top:24.75pt; margin-bottom:24.75pt; font-family: inherit;">
                    Lembretes: <br>
                <ul>
                <li>As especificações de cor ou material são sugestões de como eu gostaria, mas caso tenha encontre da cor ou material não tem problema ser outro similar.</li>
				<li>Ao escolher o presente no site do chá, você confirmou a presença em meu chá, vou esperar você (: </li>
				<li>Obrigada por fazer parte desse sonho.</li>
				</ul>
				</div>
                </div>
                </td>
                </tr>
                <tr>
                <td colspan="2" style="padding:0;">
            
                </td>
                <td style="padding:0;"></td>
                <td colspan="2" style="padding:0;">
             
                </td>
                </tr>
                <tr>
             	<td></td>
               
                </tr>
                <tr>
                <td colspan="5" style="padding:0;">
                <div style="margin-top:24.75pt;margin-bottom:24.75pt;">
                <div align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;">
                <hr align="center" width="100%" size="2" style="color:#969696;">
                </span></div>
                </div>
                </td>
                </tr>
                <tr>
               
                </tr>
                </tbody></table>
                </div>
                </td>
                <td style="padding:0;"></td>
                <td style="padding:0;"></td>
                </tr>
                </tbody></table></div>
                </div>
                <p style="font-size:11pt;font-family:Calibri,sans-serif;margin:0;">&nbsp;</p>
                </div>
                </body>
                </html>';
			$mail = new PHPMailer(true);
			try {
				$mail->isSMTP();
				$mail->Host = "smtp.gmail.com";
				$mail->SMTPAuth = true;
				$mail->Username = "emailsendti@gmail.com";
				$mail->Password = 'sendemail2020';
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
				$mail->Port = 587;
				$mail->setFrom($email, $nomeConfirmado);
				$mail->addAddress($destiny);
				$mail->addAddress($destiny);
				$mail->addReplyTo($email, $reply);
				$mail->WordWrap = 50;
				$mail->isHTML(true);
				$mail->Subject = $subject;
				$mail->Body = $html;
				$mail->AltBody = $altBody;
				$mail->send();
				return true;
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}

		public function getContato(){
			$this->load->helper('url');
			$nome = $this->input->post('nome');
			$assunto = $this->input->post('assunto');
			$emailContato = $this->input->post('email');
			$mensagem = $this->input->post('mensagem');
			$envioEmail = $this->sendEmailContato($nome,$assunto,$emailContato,$mensagem);

			if($envioEmail){
				echo "<script>
					alert('Mensagem enviada com sucesso (:');
					</script>";
				redirect("", 'refresh');

			}else{
				return false;
			}
		}

		public function sendEmailContato($nome,$assunto,$emailContato,$mensagem){

			$email = 'eduardacirina@gmail.com';
			$destiny = $email;
			$reply = "Resposta";
			$subject = "Contato - Chá de Casa Nova - " . $assunto;
			$altBody = 'Chá de Casa Nova da Duda (:';
			$html = '<!DOCTYPE html>
                <html>
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" CHARSET="UTF-8">
                </head>
                <body>
                <!-- cabecalho -->
                   <div>
                <div align="center">
                <tbody><tr style="height:63.75pt;">
                <td colspan="3" style="background-color:#303363 !important;height:63.75pt;padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;background-color:#303363 !important;">
                <span style="color:white;font-family:inherit;font-size: 24pt;">Chá de Casa Nova da Duda </span></p>
                </td>
                </tr>
                <tr>
                <td style="background-color:white;padding:0;border-style:none solid;border-right-width:1pt;border-left-width:1pt;border-right-color:#CCCCCC;border-left-color:#CCCCCC;">
                <div align="center">
                <table border="0" cellspacing="0" cellpadding="0" style="width:650px;">
                <tbody><tr>
              
                <td style="padding:50px;">
                <p><b><span style="color:#303363;font-size:13.5pt;font-family:Montserrat;">Contato do(a), ' . $nome .'</span></b></p>
                <p style="font-size:11pt;font-family:Calibri,sans-serif;margin:0;"><span style="font-family:Montserrat;">&nbsp;</span></p>
                <p><span style="font-size:11.5pt;font-family:inherit; color: #303363"
                Você recebeu uma mensagem:
  
               	</p>
               	<p>'. $mensagem .'</p>
               	<p>Email:' . $emailContato . '</p>
                </td>
                </tr>
                </tbody></table>
                </div>
                </td>
                <td style="padding:0;"></td>
                <td style="padding:0;"></td>
                </tr>
                <tr style="background-color: #ff7979">
                <td style="background-color:#ff7979;padding:22.5pt 0;">
                <div align="center">
                <table border="0" cellspacing="0" cellpadding="0" style="width:382.5pt;">
                <tbody><tr>
              
                </tr>
                <tr>
                <td colspan="5" style="padding:0;">
                <div style="margin-top:24.75pt;margin-bottom:24.75pt; font-family: inherit;">
                <div align="center" style="font-size:11pt;font-family:inherit,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;">
                <hr align="center" width="100%" size="2" style="color:#969696;">
                </span></div>
                
                </div>
                </td>
                </tr>
                <tr>
                <td colspan="2" style="padding:0;">
            
                </td>
                <td style="padding:0;"></td>
                <td colspan="2" style="padding:0;">
             
                </td>
                </tr>
                <tr>
             	<td></td>
               
                </tr>
                <tr>
                <td colspan="5" style="padding:0;">
                <div style="margin-top:24.75pt;margin-bottom:24.75pt;">
                <div align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;">
                <hr align="center" width="100%" size="2" style="color:#969696;">
                </span></div>
                </div>
                </td>
                </tr>
                <tr>
               
                </tr>
                </tbody></table>
                </div>
                </td>
                <td style="padding:0;"></td>
                <td style="padding:0;"></td>
                </tr>
                </tbody></table></div>
                </div>
                <p style="font-size:11pt;font-family:Calibri,sans-serif;margin:0;">&nbsp;</p>
                </div>
                </body>
                </html>';
			$mail = new PHPMailer(true);
			try {
				$mail->isSMTP();
				$mail->Host = "smtp.gmail.com";
				$mail->SMTPAuth = true;
				$mail->Username = "emailsendti@gmail.com";
				$mail->Password = 'sendemail2020';
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
				$mail->Port = 587;
				$mail->setFrom($email, $nome);
				$mail->addAddress($destiny);
				$mail->addAddress($destiny);
				$mail->addReplyTo($email, $reply);
				$mail->WordWrap = 50;
				$mail->isHTML(true);
				$mail->Subject = $subject;
				$mail->Body = $html;
				$mail->AltBody = $altBody;
				$mail->send();
				return true;
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}

		}
}
