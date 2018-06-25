<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "iotakopen");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$amount = mysqli_real_escape_string($link, $_REQUEST['amount']);
$iotaprice = mysqli_real_escape_string($link, $_REQUEST['iotaprice']);
$totalprice = mysqli_real_escape_string($link, $_REQUEST['totalprice']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$receiveaddress = mysqli_real_escape_string($link, $_REQUEST['receiveaddress']);

// attempt insert query execution
$sql = "INSERT INTO orders (amount, iotaprice, totalprice, email, receiveaddress) VALUES ('$amount', '$iotaprice', '$totalprice', '$email', '$receiveaddress')";
$return = mysqli_query($link, $sql);
// als $return ( wat de sql query is )
if($return === false){
  die("Niet gelukt");
} else {
  $to       = 'test@email.com';
  $subject  = 'Bestelling #.$ordernummer';
  $message  = 'Beste, Ik heb een vraag over Bestelling #.$ordernummer';
  $headers  = 'From: test@email.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
  if(mail($to, $subject, $message, $headers)){
    $location = "https://www.paypal.me/orderx/".str_replace('€ ','',$totalprice);
    header("location: $location");
  } else {
    die ("Mail niet verzonden");
  }
}
// close connection
mysqli_close($link);

?>
