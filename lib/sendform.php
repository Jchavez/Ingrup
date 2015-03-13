<?php
if(strpos($_SERVER['HTTP_REFERER'],'?')){
	$endPosition = strpos($_SERVER['HTTP_REFERER'],'?');
	$fromPageURL = substr($_SERVER['HTTP_REFERER'],0,$endPosition);
}else{
	$fromPageURL = $_SERVER['HTTP_REFERER'];
}

/* SEND_MAIL FUNCTION
 * @This will send a new email to any email address
 * ==================================================*/
function send_mail($to, $subject, $message, $from = '', $fromname = ''){
		$now = strtotime("now");
		
		$header = 
		"From: \"$fromname\" <$from>\n".
		"Reply-To:  $to\n".
		"Return-Path: $to\n".
		"Message-ID: <$now daemon@".$_SERVER['SERVER_NAME'].">\n".
		"X-Mailer:PHP/".phpversion()."\n".
		"Mime-Version: 1.0\n".
		"Content-Type: text/html; charset=UTF-8 ";
		
		if(@mail($to, utf8_decode($subject), $message ,$header)){
			return true;
		}else{
			return false;
		}
}
$message = '<table style="text-align: center; width: 465px; height: 575px;" border="0">
<tbody style="text-align: left;">
<tr style="text-align: left;">
<td colspan="2" style="text-align: left;"><strong style=" font-weight:"><strong>Formulario de Contacto INGRUP</strong></strong></td>
</tr>
<tr style="text-align: left;">
<td style="text-align: left;"><strong>Nombre Completo:</strong></td>
<td style="text-align: left;">'.$_POST['pname'].'</td>
</tr>
<tr style="text-align: left;">
<td style="text-align: left;"><strong>E-mail:</strong></td>
<td style="text-align: left;">'.$_POST['pemail'].'</td> 
</tr>
<tr style="text-align: left;">
<td style="text-align: left;"><strong>Asunto:</strong></td>
<td style="text-align: left;">'.$_POST['psubject'].'</td> 
</tr>
<tr style="text-align: left;">
<td style="text-align: left;"><strong>País:</strong></td>
<td style="text-align: left;">'.$_POST['pcountry'].'</td> 
</tr>
<tr style="text-align: left;">
<td style="text-align: left;"><strong>Mercado:</strong></td>
<td style="text-align: left;">'.$_POST['pmarket'].'</td> 
</tr>
<tr style="text-align: left;">
<td style="text-align: left;"><strong>Mensaje:</strong></td>
<td style="text-align: left;">'.$_POST['pmessage'].'</td>
</tr>
<tr style="text-align: left;">
<td style="text-align: left;"><strong>Interesado en Producto:</strong></td>
<td style="text-align: left;">'.$_POST['pnombreDelProducto'].'</td>
</tr>
</tbody>
</table>'; 
/*asesores@grupoidc.com*/ 
if(send_mail('jonathanchavez@icasa.com.gt', 'Formulario de Contacto INGRUP', $message, $_POST['pemail'], 'Sitio Web - INGRUP')){
	$msg=true;
	//$msg = 'Thank you!, your message has been sent.';
}else{
	$msg=false;
	//$msg = 'Your message could not been sent, please try again later.';
}
	die($msg);
//header('Location: '.$fromPageURL.'?msg='.urlencode($msg));
?>