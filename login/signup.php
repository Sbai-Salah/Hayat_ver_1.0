 <!-- THIS IS THE PHP OF THE SIGN UP SIDE -->
 <!-- =================================== -->
 <?php

    // include("functions.php");
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //something was posted
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];

        $password = $_POST['password'];

        if (!empty($user_name) && !empty($password) && !empty($user_email) && !is_numeric($user_name)) {

            //save to database
            $user_id = rand(0, 100);
            $query = "insert into users_new (user_id,user_name,user_email,password) values ('$user_id','$user_name','$user_email','$password')";

            mysqli_query($con, $query);

            header("Location: index.php");
            die;
        } else {
            echo "Please enter some valid information!";
        }
    }
    ?>

 <!-- ==================================== -->