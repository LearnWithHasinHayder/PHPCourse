<?php
$to = "email_address";
$from = "John Doe <test@example.com>";
$subject = "How is life - HTML";
$body = "<strong>Hello</strong><br/>কি খবর কেমন আছ?<br/>";
$body .= "<img src='https://images.unsplash.com/photo-1553389614-1eae86aa6c7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60' >";
$headers = "MIME-Version: 1.0 \r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: {$from}\r\n";
echo mail($to, $subject, $body, $headers);
