<?php
    /* Template Name: Form process */
   
   

        if(isset($_POST['submit'])
        ) {  
            
            $name = array("GIORGOS","MARIA","DIMITRIS","DESPOINA","XRISTINA","PANAGIOTIS","ISMINI",);

            $minimun = 5;
            $maximum = 12;

            $username = $_POST['username'];
            $password = $_POST['password'];

            if (strlen($username) < $minimun){

                echo "<h3>The username must have at least 5 characters.</h3>" . "<br>";

            };

            if (strlen($username) > $maximum) {

                echo "<h3>The username must have fewer than 12 characters</h3>" . "<br>";

            };

            if (!in_array( $username, $name )){

                echo "<h3>Access is not allowed.</h3>";

            } else {
                echo "<h3>Welcome!</h3>";
            };

            // echo "Τo username σου ειναι :" . $username;
            // echo "Τo password σου ειναι :" . $password;

        }            




        echo "form process";
?>

<h2>Papagia</h2>