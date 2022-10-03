<?php
     $title = "String Manipulation";
     include 'includes/header.php'
     ?>
    <h1>PHP String Manipulation</h1>
    <?php
    //Concatenation of Strings
        $phrase1 = "students who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "Trevoir Williams";
        echo $phrase1 . ", name Tiffany, ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
    //String transformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
        echo 'Upper case: ' . strtoupper($name).'<br/>';
        echo 'Upper case: ' . strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<Hr/>';
        echo 'Repeat String: ' . str_repeat('a', 10).'<br/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a',10)).'<br/>';
        echo 'Get a Substring: ' . substr($name, 3, 5).'<br/>';

        echo 'Get position of string: ' . strpos($name, 'W').'<br/>';
        //Returns NULL
        //echo 'Get position of string: ' .strpos($combine, 'z').'<br/>';
        echo 'Fine Character :R: ' . strchr($name, 'R').'<br/>';
        echo 'Fine Character :r: ' . strchr($name, 'r').'<br/>';
        echo 'Fine Character :s: ' . strchr($name, 's').'<br/>';
        echo 'Fine Character :R: ' . strchr($name, 'R').'<br/>';

        echo 'Fine Length of string: ' . strlen($name).'<br/>';

        echo 'Without Trim: '. "A" . " B C D " .'<br/>'; 
        echo 'Trim space on both sides: '. "A" . trim(" B C D ") ."E" . '<br/>';
        echo 'Trim space on the left: '. "A" . ltrim(" B C D ") ."E" . '<br/>';
        echo 'Trim space on both sides: '. "A" . trim(" B C D ") ."E" . '<br/>';

        echo ' Replace string with another: '. str_replace ("stand", "sit", $phrase2) . '<br/>';

    
?>
<?php require 'includes/footer.php' ?>