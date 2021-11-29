<?php
    include_once 'header.php';
?>

<section class="signup-form">
    <h2 class="sign_up">Sign up</h2>
    <div class="div">
    <form class="form" action="includes/signup.inc.php" method="post">
        <div class="type">
        <input type="text" name="name" placeholder="Full name..." value="">
        </div>

        <div class="type">
        <input type="text" name="email" placeholder="Email..." value="">
        </div>

        <div class="type">
        <input type="text" name="uid" placeholder="Username..." value="">
        </div>

        <div class="type">
        <input type="password" name="pwd" placeholder="Password" value="">
        </div>

        <div class="type">
        <input type="password" name="pwdrepeat" placeholder="Confirm Password" value="">
        </div>

        <div class="type">
        <button type="submit" name="submit">Sign Up</button>
        </div>
    </form>
    
    </div>

    <?php

if(isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
       echo "<p>Choose a proper username</p>";
   }
   else if ($_GET["error"] == "invalidemail") {
       echo "<p>Choose a proper Email</p>";
   }   
   else if ($_GET["error"] == "passwordsdontmatch") {
       echo "<p>Password doesn't match!</p>";
   }   
   else if ($_GET["error"] == "stmtfailed") {
       echo "<p>Something went wrong, try again!</p>";
   }   
   else if ($_GET["error"] == "usernametaken") {
       echo "<p>Username already taken!</p>";
   }   
   else if ($_GET["error"] == "none") {
       echo "<p>You have signed up!</p>";
   }   

}

?>

</section>

