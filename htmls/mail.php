<?php
  $filename = "form.txt"; //��� ����� ��� ������������
  $to = "abc@mail.ru"; //����
  $from = "def@gmail.com"; //�� ����
  $subject = "Test"; //����
 
  $boundary = "---"; //�����������
  /* ��������� */
  $headers = "From: $from\nReply-To: $from\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";
  $body = "--$boundary\n";
  /* ������������ ��������� ��������� */
  $body .= "Content-type: text/html; charset='utf-8'\n";
  $body .= "Content-Transfer-Encoding: quoted-printablenn";
  $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
  $file = fopen($filename, "r"); //��������� ����
  $text = fread($file, filesize($filename)); //��������� ���� ����
  fclose($file); //��������� ����
  /* ��������� ��� �����������, �������� ����� ����� � ��������� � ���� ������ */
  $body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($filename)."?=\n"; 
  $body .= "Content-Transfer-Encoding: base64\n";
  $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
  $body .= chunk_split(base64_encode($text))."\n";
  $body .= "--".$boundary ."--\n";
  mail($to, $subject, $body, $headers); //���������� ������
?>