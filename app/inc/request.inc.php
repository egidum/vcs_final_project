<?php
if(isset($_POST['submit'])) {
   $fname = trim($_POST['fname']);
   $lname = trim($_POST['lname']);
   $email = trim($_POST['email']);
   $phone = trim($_POST['phone']);
   $title = trim($_POST['title']);
   $comments = trim($_POST['comments']);

   if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($title) && !empty($comments)) {
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $from = "$email";
         $to = "#";
         $title = htmlspecialchars($title);
         $author = 'Nuo: ' . $fname . ' ' . $lname . ',' . $phone;
         $comments = htmlspecialchars($comments);
         mail($to, $title, $author, $comments, $from);
         echo "<script>alert('Jūsų žinutė išsiųsta.');</script>";
      }
   }

   include('db.inc.php');
}
