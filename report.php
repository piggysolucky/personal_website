<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Thank you</title>
</head>
<body>
  <h2>Thanks for your time!</h2>

<?php
  $company_name= $_POST['conname'];
  $email = $_POST['email'];
  $suggestion = $_POST['sug'];

  $to = 'erinyan1992@gmail.com';  $subject = 'Thanks for your time! I will consider your suggestions carefully';  $msg = "$name is $is_employer and is from $company_name.\n" .    "Will he fives me the chance $is_hire\n" .
    "email $email\n".
    "suggestions: $sug\n";
  mail($to, $subject, $msg, 'From:' . $email);
  echo 'Thanks for submitting the form! Have a nice day!<br />';
?>

</body>
</html>
