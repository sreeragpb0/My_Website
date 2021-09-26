<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'sreeragpb0@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials

  // $contact->smtp = array(
  //   'host' => 'ssreeragofficial@gmail.com',
  //   'username' => 'ssreeragofficial',
  //   'password' => 'sreeragpbmocen@1@1@1',
  //   'port' => '587'
  // );
  

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
  // Codeconia
  // 45K views 8 months ago
  // 33:00
  // Now playing
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message']; 
  
  
  $to = "ssreeragofficial@gmail.com";

  $txt = "name :". $name ."\r\nemail: ". $email . "\r\nsubject: " . $subject . "\r\nmessage: ". $message ;
  $headers="From: noreply@goaway.com";

  mail($to, $subject, $headers, $txt);
  
?>
