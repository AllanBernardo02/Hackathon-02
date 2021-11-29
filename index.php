<?php
    include_once 'header.php';
?>

    <!-- main -->
    
        <div class="head">
        <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<p>Hello there ". $_SESSION["useruid"] ."</p>";
                    }
                    
        ?>
            <h1 class="intro">This is an Introduction</h1>
            <p class="para">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente ut iusto vitae modi laudantium laboriosam placeat 
                maiores corrupti voluptas? Harum tenetur, sequi quos debitis necessitatibus porro iste cum vitae perferendis.
            </p>
        </div>

        <div class="main">
            <h2 class="basic">Some Basic Categories</h2>
        </div>

        <div class="basic1">
            <div class="box">
                <h3>Fun Staff</h3>
            </div>

            <div class="box">
                <h3>Serious Staff</h3>
            </div>

            <div class="box">
                <h3>Ecxiting Staff</h3>
            </div>

            <div class="box">
                <h3>Boring Staff Staff</h3>
            </div>

        </div>

    </div>



</body>
</html>