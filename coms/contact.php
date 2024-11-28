<?php
 session_start();
    $responseMessage = isset($_SESSION['responseMessage']) ? $_SESSION['responseMessage'] : "";
    unset($_SESSION['responseMessage']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="../images/x-icon" href="../images/Portion Port Logo.png">
</head>
<body>
    <nav>
      <div class="navbar">
        <a class="nav" href="../home.php">Home</a>
        <a class="nav" href="../about.php">About Us  </a>
        <div class="dropdown">
          <a href='#' class="dropbtn">Partnership </a>
          <div class="dropdown-content">
            <a href="../Bur-Go/burger.php">Bur-go House</a>
            <a href="../coffee/mate.php">Coffee Mate</a>
            <a href="../Homie'sPizza/homiespizza.php">Homie's Pizza</a>
            <a href="../kitchen/sh.php">Sushi Kitchen</a>
            <a href="../tas/tea.php">Tastea Shop</a>
          </div>
        </div>
        <a class="nav" href="../faq.php">Frequently Asked</a>
        <a class="nav" href="contact.php">Contact Us</a>

    </nav>
    
    <div class="header">
        <h1>Got somethin' to say?</h1>
        <p style="font-size:25px; margin-bottom:15vh;">
            Whether it’s a question, feedback, a complaint, or a suggestion, feel free to connect with us through the submit button below.
            We’ll get back to you as quickly as your delivery (๑>ᗜºั).
        </p>
    </div>
    
    <div class="wrapper" style="margin-top: 10vh;">
        <div class="container">
            <h2>Click Submit</h2><br>
           
            <form method="post" action="message.php" onsubmit="return confirmSubmission()">
                <label class="title">
                    Name: <input type="text" name="name" placeholder="Harry Watson" value="<?php echo isset($name) ? $name : ''; ?>"><br><br>
                </label>
                <label class="title">
                    Email: <input type="email" name="email" placeholder="example@gmail.com" value="<?php echo isset($email) ? $email : ''; ?>"><br><br>
                </label>
                <label class="title">
                    Mobile Number: <input type="text" name="mobile" placeholder="09XX-XXX-YYYY" value="<?php echo isset($mobile) ? $mobile : ''; ?>"><br><br>
                </label>
                <label class="title">
                    Message: <textarea name="message" rows="5" cols="40" placeholder="Write your message here"><?php echo isset($message) ? $message : ''; ?></textarea><br><br>
                </label>
                <input type="submit" name="submit" value="Submit">  
            </form>
        </div>
        
		<div class="column">
			<div class="response-box">
				<h2>Hey There!</h2><br>
				<p>
					After you've clicked the submit. I'll tell you if we've received the message or not. Make sure all the information you've put are correct or else, 
					we won't be able to contact you. q(╯ᆺ╰๑)
				</p><br>
				<?php echo $responseMessage; ?>
			</div>
			
			<div class="details">
				<h2>Contact Information</h2><br>
				<i>
					<p><b>Email</b>: sanicon788@gmail.com </p><br>
					<p><b>Phone</b>: 0987-369-2770 </p><br>
					<p><b>Address</b>: Suite 150 1315 Norberto Harbor, New Mickey, AK 43794-8796</p>
				</i>
				<br>
				<a class="fa fa-facebook"href="https://www.facebook.com/" target="_blank"></a>
				<a class="fa fa-twitter" href="https://twitter.com/"target="_blank"></a>
				<a class="fa fa-linkedin-square" href="https://www.linkedin.com/" target="_blank"></a>
				<a class="fa fa-instagram" href="https://www.instagram.com/"target="_blank"></a>
			</div>
		</div>
    </div>
    
    <hr>
    
    <footer>
        <p><small>Made by Abalain, Almaida, Catimbang, Cuaño & Morante 2024 © Copyright Intended</small></p>
    </footer>
    
    <script>
        function confirmSubmission() {
            return confirm("Are you sure you want to submit the form (o_O) ? ");
        }
    </script>
    
</body>
</html>