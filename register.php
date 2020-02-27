<?php include('server.php') ?>

<html>
<head>
  <title>Tag Registration System</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Tag Register</h2>
  </div>
	
  <form method="post" action="register.php" id="register_form">
	
  	<div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
	  <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
	  <?php if (isset($name_error)): ?>
	  	<span><?php echo $name_error; ?></span>
	  <?php endif ?>
	 </div>

	<div <?php if (isset($tag_error)): ?> class="form_error" <?php endif ?> >
	  <input type="number" name="tag" placeholder="Tag ID" value="<?php echo $tag; ?>" required>
	  <?php if (isset($tag_error)): ?>
	  	<span><?php echo $tag_error; ?></span>
	  <?php endif ?>
	 </div>

	<div <?php if (isset($contact_error)): ?> class="form_error" <?php endif ?> >
	  <input type="tel" name="contact" placeholder="Contact number" value="<?php echo $contact; ?>" required>
	  <?php if (isset($contact_error)): ?>
	  	<span><?php echo $contact_error; ?></span>
	  <?php endif ?>
	 </div>

	<div <?php if (isset($tarikh_error)): ?> class="form_error" <?php endif ?> >
	  <input type="text" name="tarikh" placeholder="Date in" value="<?php echo $tarikh; ?>">
	  <?php if (isset($tarikh_error)): ?>
	  	<span><?php echo $tarikh_error; ?></span>
	  <?php endif ?>
	 </div>

	<div <?php if (isset($wad_error)): ?> class="form_error" <?php endif ?> >
	  <input type="text" name="wad" placeholder="Wad & Bed no" value="<?php echo $wad; ?>">
	  <?php if (isset($wad_error)): ?>
	  	<span><?php echo $wad_error; ?></span>
	  <?php endif ?>
	 </div>

	<div>
  		<button type="submit" name="register" id="reg_btn">Register</button>
  	</div>

	<div>
    	<p> 
          <a href="homepage.php" style="color: blue;">Go to homepage</a> 
        </p>
    </div>

  </form>
</body>
</html>