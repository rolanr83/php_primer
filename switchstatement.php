<?php
     $title = "Switch Statement";
     include 'includes/header.php'
     ?>
    <h1>Switch Statement</h1>
    <?php
        $grade = 'C';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green">YOU ARE A SUPERHERO!</h2>';
                break;
            case 'B':
                echo '<h2 style="color: green">YOU DID WELL!</h2>';
                break;
            default:
                echo '<h2 style="color: red">YOU HAVE FAILED......</h2>';
                break;

        }

?>
<?php require 'includes/footer.php' ?>