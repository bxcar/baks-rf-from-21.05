<?php
$sendto  = strip_tags(trim($_POST['sendto']));//Адреса, куда будут приходить письма

$amount  = strip_tags(trim($_POST['amount']));
$period  =  strip_tags(trim($_POST['period']));
$region  =  strip_tags(trim($_POST['region']));
$employmentType  =  strip_tags(trim($_POST['employmentType']));
$lastExperienceStartMonth  =  strip_tags(trim($_POST['lastExperienceStartMonth']));
$lastExperienceStartYear  =  strip_tags(trim($_POST['lastExperienceStartYear']));
$monthlySalary  =  strip_tags(trim($_POST['monthlySalary']));
$creditSecurity  =  strip_tags(trim($_POST['creditSecurity']));
$lastName  =  strip_tags(trim($_POST['lastName']));
$firstName  =  strip_tags(trim($_POST['firstName']));
$surname  =  strip_tags(trim($_POST['surname']));
$phone  =  strip_tags(trim($_POST['phone']));
$email  =  strip_tags(trim($_POST['email']));


$birthDate  =  strip_tags(trim($_POST['birthDate']));
$birthPlace  =  strip_tags(trim($_POST['birthPlace']));
$sn  =  strip_tags(trim($_POST['sn']));
$issueDate  =  strip_tags(trim($_POST['issueDate']));
$code  =  strip_tags(trim($_POST['code']));
$issuer  =  strip_tags(trim($_POST['issuer']));
$address  =  strip_tags(trim($_POST['address']));


//$check_email_delivery =  strip_tags(trim($_POST['check-email-delivery']));

// Формирование заголовка письма

$subject  = '[Новая заявка на кредит]';
/*$headers  = "From: ".$name." \r\n";
$headers .= "Reply-To: ". strip_tags($name) . "\r\n";*/
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка на кредит</h2>\r\n";
if(!empty($amount)) {
    $msg .= "<p><strong>Сумма кредита:</strong> ".$amount."</p>\r\n";
}

if(!empty($period)) {
    $msg .= "<p><strong>На какой срок:</strong> ".$period."</p>\r\n";
}

if(!empty($region)) {
    $msg .= "<p><strong>Город получения:</strong> ".$region."</p>\r\n";
}

if(!empty($employmentType)) {
    $msg .= "<p><strong>Тип занятости:</strong> ".$employmentType."</p>\r\n";
}

if(!empty($lastExperienceStartMonth)) {
    $msg .= "<p><strong>Начало работы на последнем месте (месяц):</strong> ".$lastExperienceStartMonth."</p>\r\n";
}

if(!empty($lastExperienceStartYear)) {
    $msg .= "<p><strong>Начало работы на последнем месте (год):</strong> ".$lastExperienceStartYear."</p>\r\n";
}

if(!empty($monthlySalary)) {
    $msg .= "<p><strong>Ежемесячный доход:</strong> ".$monthlySalary."</p>\r\n";
}

if(!empty($creditSecurity)) {
    $msg .= "<p><strong>Обеспечение кредита:</strong> ".$creditSecurity."</p>\r\n";
}

if(!empty($lastName)) {
    $msg .= "<p><strong>Фамилия:</strong> ".$lastName."</p>\r\n";
}

if(!empty($firstName)) {
    $msg .= "<p><strong>Имя:</strong> ".$firstName."</p>\r\n";
}

if(!empty($surname)) {
    $msg .= "<p><strong>Отчество:</strong> ".$surname."</p>\r\n";
}

if(!empty($phone)) {
    $msg .= "<p><strong>Телефон для связи:</strong> ".$phone."</p>\r\n";
}

if(!empty($email)) {
    $msg .= "<p><strong>Электронная почта:</strong> ".$email."</p>\r\n";
}

if(!empty($birthDate)) {
    $msg .= "<p><strong>Дата рождения:</strong> ".$birthDate."</p>\r\n";
}

if(!empty($birthPlace)) {
    $msg .= "<p><strong>Место рождения:</strong> ".$birthPlace."</p>\r\n";
}

if(!empty($sn)) {
    $msg .= "<p><strong>Номер паспорта:</strong> ".$sn."</p>\r\n";
}

if(!empty($issueDate)) {
    $msg .= "<p><strong>Дата выдачи:</strong> ".$issueDate."</p>\r\n";
}

if(!empty($code)) {
    $msg .= "<p><strong>Код подразделения:</strong> ".$code."</p>\r\n";
}

if(!empty($issuer)) {
    $msg .= "<p><strong>Кем выдан:</strong> ".$issuer."</p>\r\n";
}

if(!empty($address)) {
    $msg .= "<p><strong>Адрес регистрации (как в паспорте):</strong> ".$address."</p>\r\n";
}
$msg .= "</body></html>";

if(!empty($email)
    && !empty($period)
    && !empty($region)
    && !empty($employmentType)
    && !empty($lastExperienceStartMonth)
    && !empty($lastExperienceStartYear)
    && !empty($monthlySalary)
    && !empty($creditSecurity)
    && !empty($lastName)
    && !empty($firstName)
    && !empty($surname)
    && !empty($phone)
    && !empty($email)
    && !empty($birthDate)
    && !empty($birthPlace)
    && !empty($sn)
    && !empty($issueDate)
    && !empty($code)
    && !empty($issuer)
    && !empty($address))
{
//     отправка сообщения
    if(mail($sendto, $subject, $msg, $headers)) {
        $result = 1;
        echo json_encode($result);
    } else {
        $result = 0;
        echo json_encode($result);
    }
}

else {
    $result = 0;
    echo json_encode($result);
}
?>