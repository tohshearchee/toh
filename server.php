<?php

// connect to the database
$db = mysqli_connect('localhost', 'root', 'schee7405', 'registration', '3307');
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

/*  $sql_u = "SELECT * FROM tag_user WHERE Tag num='$Tag_no'";
  $res_u = mysqli_query($db, $sql_u);
  
  	if (mysqli_num_rows($res_u) > 0) {
  	  $tag_error = "Sorry... Tag ID already taken"; 	
  	}
  	else{
          $query = "INSERT INTO tag_holder(Username, Tag num, Contact num, Tarikh, Wad) 
                                    VALUES('$Name', '$Tag_no', '$Contact_no', '$Date_in', '$Wad')";
          mysqli_query($db, $query);
           //$query = "INSERT INTO users (username, email, password) 
      	    	  //VALUES ('$username', '$email', '".md5($password)."')";
           $results = mysqli_query($db, $query);
           $_SESSION['Username'] = $Name;
           $_SESSION['Tag num'] = $Tag_no;
           $_SESSION['Contact num'] = $Contact_no;
           $_SESSION['Wad'] = $Wad;
           $_SESSION['success'] = "Tag user is saved";
           header('location: index.php');
*/
  // Finally, register user if there are no errors in the form
  /*if (count($errors) == 0) {
  	
  	$query = "INSERT INTO tag_holder(Username, Tag num, Contact num, Tarikh, Wad) 
                                VALUES('$Name', '$Tag_no', '$Contact_no', '$Date_in', '$Wad')";
  	mysqli_query($db, $query);
  	$_SESSION['Name'] = $Name;
  	$_SESSION['Tag no'] = $Tag_no;
	  $_SESSION['Contact no'] = $Contact_no;
	  $_SESSION['Wad'] = $Wad;
  	$_SESSION['success'] = "Tag user is saved";
	  header('location: index.php');	
 */
  }
}
?>