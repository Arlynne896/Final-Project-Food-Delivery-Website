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
	<link rel="icon" type="../x-icon" href="../Portion Port Logo.png">
</head>
<body>
    <nav>
      <div class="navbar">
        <a class="nav" href="homiespizza.php">Home</a>
        <a class="nav" href="aboutHomie.php">About Us  </a>
        <a class="nav" href="faq.php">Frequently Asked</a>
        <a class="nav" href="contact.php">Contact Us</a>

    </nav>
    
    <div class="pizza">


<h1>Feel free to contact us</h1>



</div>
    
    <div class="wrapper" style="margin-top: 10vh;">
        <div class="container">
            <h2>Contact Us</h2><br>
           
            <form method="post" action="message.php" onsubmit="return confirmSubmission()">
                <label class="title">
                    Name: <input type="text" name="name" placeholder="Marvin Styles" value="<?php echo isset($name) ? $name : ''; ?>"><br><br>
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
        
	
		
		</div>
    </div>
    
    <hr>
    
    <footer>
        <p style="color:#E8D9CD;"><small>Homie's Pizza 2024 © Copyright Intended</small></p>
    </footer>
    
    <script>
        function confirmSubmission() {
            return confirm("Are you sure you want to submit the form (o_O) ? ");
        }
    </script>
    
</body>
</html>