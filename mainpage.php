<?php 
session_start();
include "db_con.php";
if (isset($_POST['uname']) && isset($_POST['password']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname))
    {
        header("Location:login.php?error=User Name is required");
        exit();
    }
    else if(empty($pass))
    {
        header("Location:login.php?error=Password is required");
        exit();
    }
    else 
    {
        $sql = "SELECT * FROM aboutdb WHERE Username='$uname' AND Password='$pass'";
        $result = mysqli_query($con,$sql);

        if (mysqli_num_rows($result) === 1 )
        {
            $row = mysqli_fetch_assoc($result);
            if ($row['Username'] === $uname && $row['Password'] === $pass)
            {
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['Id'] = $row['Id'];
                header("Location:Home.php");
                exit();

                
            }
            else
            {
                header("Location:login.php?error=Incorrect User Name or Password");
                exit();
            }
        }
        else{
        header("Location:login.php?error=Incorrect User Name or Password");
        exit();
       }

     }
}
else
{
    header("Location:login.php");
    exit();
} ?>

