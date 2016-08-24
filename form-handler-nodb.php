<?php
$myemail = "p.romanchuk@gmail.com"; input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up email
$msg = "Нове повідомлення з контактної форми\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
mail($email,"Дякуємо Вам за Ваше звернення",$msg);
echo 'Дякуємо Вам за Ваше звернення.  Будь ласка <a href="index.html">Клікніть тут для повернення на головну сторінку';

?>
