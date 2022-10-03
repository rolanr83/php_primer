    <?php
     $title = "Index";
     include 'includes/header.php'
     ?>
    <!-- Basic HTML -->
    <h1> Hello HTML - PHP Primer</h1>
    <br/>
    <?php 
        //Printing to HTML using echo
        echo 'Hello PHP!';
        //You can echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?> 

    <?php
        //variables need a '$'. They are not strongly typed
        $name = 'Rolan Robinson';
        $age = 31;
        // echo variable
        echo $name;
        echo '<h1> My Name Is: '.$name.' </h1>';
        echo '<h1> My Age Is: '.$age.' </h1>';
        //Echo using double quotes and interpolation
        echo "<h1> My Name Is: $name </h1>";
    ?>

<button type="button" class="btn btn-dark">CLICK ME</button>

<?php require 'includes/footer.php' ?>