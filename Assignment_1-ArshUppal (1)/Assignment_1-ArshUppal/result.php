<?php
    // get the data from the form
    $name = filter_input(INPUT_POST, 'name');
    $password = filter_input(INPUT_POST, 'password');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $weight = filter_input(INPUT_POST, 'weight');
    $membershipLength = filter_input(INPUT_POST, 'membershipLength');
    $currentFitnessLevel = filter_input(INPUT_POST, 'currentFitnessLevel', FILTER_VALIDATE_INT);

    //Error messages
    $name_error = '';
    $password_error = '';
    $email_error = '';
    $age_error = '';
    $weight_error = '';

    // Error message for name
    if (empty($name)) {
        $name_error = 'Please enter your name.';
    } else if(strlen($name) <= 5){
        $name_error = 'Name should be atleast 5 characters long.';
    }

    // Error message for password
    if (empty($password)) {
        $password_error = 'Please enter your password.';
    } else if(strlen($password) <= 5){
        $password_error = 'Password should be atleast 5 characters long.';
    }

    // Error message for validating email address
    if ($email === FALSE) {
        $email_error = "Please enter a valid email address.";
    }

    // Error message for age
    if (empty($age)) {
        $age_error = 'Age must be a valid number.';
    } else if($age < 18){
        $age_error = 'Age should be more than 18 years.';
    } else if($age > 100){
        $age_error = 'We cannot accept you as our member. Your age should be less than 100 years.';
    }

    // Error message for weight
    if (empty($weight)) {
        $weight_error = 'Please select prefered weight lifting method.';
    }


    // if an error message exists, go to the index page
    if ($name_error != '' || $password_error != '' || $email_error != '' || $age_error != '' || $weight_error = '') {
        //This redirects us to the index.php page again and displays the error_message
        include('index.php');
        exit();
    }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Globo-Gym Membership</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #9FDFB6;">
    <main>
      <div class="form-content">
        <h1>Successful Application</h1>
        <img src ="Images/login.png" style="width:350px; height:250px;">
        <div class="final">
        <p style="text-align: center; color: green; font-weight: bold;"> Welcome <span><?php echo $name; ?></span>. You are <span><?php echo $age; ?></span> years old.</p>
        <p style="text-align: center; color: green; font-weight: bold;">Your membership length is <span><?php echo $membershipLength; ?></span>.</p>
        <p style="text-align: center; color: green; font-weight: bold;"> Your prefered weight lifting method is <span><?php echo $weight; ?></span>. </p>
        <p style="text-align: center; color: green; font-weight: bold;"> Your current fitness level is <span><?php echo $currentFitnessLevel; ?></span>.</p>
        <p style="text-align: center; color: blue; font-weight: bold;">Congratulations, you are now an active member of Globo-Gym. Now get ready to turn your FAT INTO FIT !!!!</p>

        <div id="buttons" style="text-align: center;>
            <label>&nbsp;</label>
            <a href="index.php"><input type="submit" value="Go Back"></a><br>
        </div>
      </div>
    </div>
    </main>
</body>
</html>
