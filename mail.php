<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];

if (mail("TOP-MARKET-06@yandex.ru", "Заявка",  $name. ' оставил заявку, его телефон '.$phone, "From: test@top1market.ru \r\n") )
{
    echo "E-mail was send. Check your e-mail";
} else
{
    echo "Error";
}
?>