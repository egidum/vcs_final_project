<?php
   define("DB_SERVER", "localhost");
   define("DB_USER", "root");
   define("DB_PASSWORD", "");
   define("DB_NAME", "baigiamasis");

   $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
   if($mysqli->connect_error) {
      echo "Atsiprašome, įvyko klaida.<br>";
      echo 'Klaida: ' . $mysqli->connect_error . '<br>';
      exit;
   }

   mysqli_query($mysqli, "INSERT INTO clients (fname, lname, email, phone, title, comments) VALUES('$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[phone]', '$_POST[title]', '$_POST[comments]')");
