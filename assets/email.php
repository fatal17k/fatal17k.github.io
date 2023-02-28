<?php
if (isset($_POST['submit'])) {
    // Отримуємо дані з форми
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  
    // Встановлюємо адресу, на яку потрібно відправити лист
    $to = "maksimkalus17@gmail.com"; // Замініть цю адресу на власну
  
    // Встановлюємо тему листа
    $subject = "Нове повідомлення від " . $name;
  
    // Встановлюємо заголовки листа
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-type: text/html; charset=UTF-8" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
  
    // Відправляємо лист
    if (mail($to, $subject, $message, $headers)) {
      // Повідомляємо користувача про успішність відправки листа
      echo "success";
    } else {
      echo "error: Unable to send message";
    }
    if (empty($name) || empty($email) || empty($message)) {
      echo "error: Please fill in all fields";
  }
?>


