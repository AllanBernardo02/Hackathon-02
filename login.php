<?php
    include_once 'header.php';
?>

<section class="signup-form">
    <h2 class="sign_up">Log in</h2>
    <div class="div">
    <form class="form" action="includes/login.inc.php" method="post">
        <div class="type">
        <input type="text" name="UID" placeholder="Username/Email..." value="">
        </div>

        <div class="type">
        <input type="password" name="pwd" placeholder="Password..." value="">
        </div>

        <div class="type">
        <button type="submit" name="submit">Log in</button>
        </div>
    </form>
    </div>

<?php

if(isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
       echo "<p>Incorrect login information!</p>";
   }
}

?> 
    
</section>