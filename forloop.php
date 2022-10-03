<?php
     $title = "For Loop";
     include 'includes/header.php'
     ?>
    <h1>for LoopS</h1>
    
    <?php
       // for Loops
       for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD<p>';
       }

       for($count = 0; $count < 10; $count++){
        echo "<p>The count is: $count";
       }

    ?>
    
    <?php require 'includes/footer.php' ?>