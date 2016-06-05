<?php
function sent_mail($option){

	$email  = $option['email'];
	$note = $option['note'];
	$username = $option['fullname'];
	$phone = $option['phone'];


$to =  get_option('admin_email');
$subject = 'Thông tin Liên hệ';
$body = '<table width="100%" border="1" cellpadding="5" cellspacing="0" style="border-collapse:collapse;border-style:solid;border-color:#cccccc;font-family:Arial,Helvetica,sans-serif;font-size:10pt">
<tbody><tr>
  <td width="200"><div align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:10pt;font-weight:bold;width:230px">Tên</div></td>
  <td width="150"><div align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:10pt;font-weight:bold">Email
</div></td>
<td width="150"><div align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:10pt;font-weight:bold">Phone
</div></td>
  <td width="150"><div align="right" style="font-family:Arial,Helvetica,sans-serif;font-size:10pt;font-weight:bold">Nội dung
</div></td>
  
</tr>

				  <tr>
						<td> '.$username.'</td>
						<td><div align="center"><a href="mailto:'.$email.'">'.$email.'</a></div></td>
						<td><div align="center">'.$phone.'</div></td>
						<td><div align="right">'.$note.'</div></td>
						
				  </tr>
				
</tbody></table>';
$headers = array('Content-Type: text/html; charset=UTF-8');

return wp_mail( $to, $subject, $body, $headers );
exit();

}

function sent_mail_clien_top($email){
$to =  $email;
$subject = 'Thông tin Liên hệ';
$body = 'cảm ơn quý khách đã liên hệ với '.bloginfo('name').' - chúng toi sẽ liên hệ lại cho quý khách trong thời gian sớm nhất !  <br /><br /><br />';
$body .= bloginfo('name');
$headers = array('Content-Type: text/html; charset=UTF-8');

return wp_mail( $to, $subject, $body, $headers );
exit();
}




