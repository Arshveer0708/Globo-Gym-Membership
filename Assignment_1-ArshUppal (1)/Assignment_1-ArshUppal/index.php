<!--
    Name - Arshveer Uppal
    Student ID - 200451204
    Assignment - 2
  -->
<?php
    //set default value of variables for initial page load
    // this is where you should check to see if all the variables are set
    if (!isset($name)) { $name = ''; }
    if (!isset($password)) { $password = ''; }
    if (!isset($email)) { $email = ''; }
    if (!isset($age)) { $age = ''; }
    if (!isset($weight)) { $weight = ''; }
    if (!isset($membershipLength)) { $membershipLength = ''; }
    if (!isset($currentFitnessLevel)) { $currentFitnessLevel = ''; }
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

<body style="background-color: #FFE1D6;">
    <main>
      <img src ="Images/gym.png">
      <div class="form-content">
    <h1> Globo-Gym Membership</h1>
    <h2>Sign-Up Information</h2>

    <form action="result.php" method="post">

      <!-- Enter your name -->
            <div class="form-group">
              <?php
              //This code checks to see if we got an error message in name from the result.php page
               if (!empty($name_error)) { ?>
                  <p class="error"><?php echo htmlspecialchars($name_error); ?></p>
              <?php } ?>
              <label>Name:</label>
              <input type="text" class="form-control" placeholder="Enter your name" name="name" value="<?php echo htmlspecialchars($name); ?>">
            </div>

            <!-- Enter your password -->
            <div class="form-group">
              <?php
              //This code checks to see if we got an error message in password from the result.php page
               if (!empty($password_error)) { ?>
                  <p class="error"><?php echo htmlspecialchars($password_error); ?></p>
              <?php } ?>
              <label>Password:</label>
              <input type="password" class="form-control" placeholder="Enter password" name="password" value="<?php echo htmlspecialchars($password); ?>">
            </div>

            <!-- This is where you should enter your email address -->
            <div class="form-group">
              <?php
              //This code checks to see if we got an error message in email address from the result.php page
               if (!empty($email_error)) { ?>
                  <p class="error"><?php echo htmlspecialchars($email_error); ?></p>
              <?php } ?>
              <label>Email address:</label>
              <input type="email" class="form-control" placeholder="Enter your email address" name="email" value="<?php echo htmlspecialchars($email); ?>">
            </div>

            <!-- This is where you should enter your age. -->
            <div class="form-group">
              <?php
              //This code checks to see if we got an error message in age from the result.php page
               if (!empty($age_error)) { ?>
                  <p class="error"><?php echo htmlspecialchars($age_error); ?></p>
              <?php } ?>
              <label>Age:</label>
              <input type="number" class="form-control" placeholder="Enter your age" name="age" value="<?php echo htmlspecialchars($age); ?>">
            </div>

            <!-- This is where you should check the box if locker is required.. -->
            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" id="requireLocker" name="requireLocker">
              <label class="custom-control-label" for="requireLocker">Require Locker</label>
            </div>
            <br>

            <!-- Here you should select the membership length. -->
            <div>
            <label for="membershipLength">Membership Length</label>
            <select name="membershipLength" class="custom-select-sm">
              <option name="membershipLength" value="2 weeks">2 weeks</option>
              <option name="membershipLength" value="1 month">1 month</option>
              <option name="membershipLength" value="1 month"> 3 months</option>
              <option name="membershipLength" value="1 month">6 months</option>
              <option name="membershipLength" value="1 year"> 1 year </option>
              <option name="membershipLength" value="more than 1 year">More than 1 year</option>
            </select>
          </div>
            <br>

            <!-- Here you should enter your current fitness level. -->
            <div>
            <label for="currentFitnessLevel">Current Fitness Level</label>
            <br>
            <input type="range" class="custom-range" id="customRange" name="currentFitnessLevel">
          </div>

          <!-- Here you should check your Prefered Weight Lifting Method. -->
          <div class="form-group">
            <?php
            //This code checks to see if we got an error message in age from the result.php page
             if (!empty($weight_error)) { ?>
                <p class="error"><?php echo htmlspecialchars($weight_error); ?></p>
            <?php } ?>
            <h4>Prefered Weight Lifting Method</h4>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="weight" value="no weights">No Weights
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="weight" value="free weights">Free Weights
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="weight" value="machine weights">Machine Weights
              </label>
            </div>
          </div>
          <br>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Submit"><br>
        </div>

    </form>
  </div>
    </main>
</body>
</html>
