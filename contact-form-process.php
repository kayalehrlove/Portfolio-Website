<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "kayalehrlove@example.com";
    $subject = "New message from your portfolio website";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "Thank you for contacting me. I will get back to you as soon as possible.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}


/*

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
*/



?>
