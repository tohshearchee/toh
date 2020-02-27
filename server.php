<?php

// connect to the database
$db = mysqli_connect('sql12.freemysqlhosting.net', 'sql12324494', 'Jh8mHQuHhk', 'sql12324494');
$username = "";
$tag = "";
$contact ="";
$tarikh = "";
$wad = "";

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $username = ($_POST['username']);
  $tag = ($_POST['tag']);
  $contact = ($_POST['contact']);
  $tarikh = ($_POST['tarikh']);
  $wad = ($_POST['wad']);

  $sql_u = "SELECT * FROM patient WHERE tag='$tag'";
  $sql_e = "SELECT * FROM patient WHERE wad='$wad'";
  $res_u = mysqli_query($db, $sql_u);
  $res_e = mysqli_query($db, $sql_e);

  if (mysqli_num_rows($res_u) > 0) {
    $tag_error = "Sorry... Tag ID already used"; 	
  }else if(mysqli_num_rows($res_e) > 0){
    $wad_error = "Sorry... Bed already occupied"; 	
  }else{
         $query = "INSERT INTO patient (username, tag, contact, tarikh, wad) 
              VALUES ('$username', '$tag', '$contact', '$tarikh', '$wad')";
         $results = mysqli_query($db, $query);
         header('location: register.php');
         exit();
  }
}
?>
