<?php
$myemail = "p.romanchuk@gmail.com"; input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up email
$msg = "���� ����������� � ��������� �����\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
mail($email,"������ ��� �� ���� ���������",$msg);
echo '������ ��� �� ���� ���������.  ���� ����� <a href="index.html">������ ��� ��� ���������� �� ������� �������';

?>
