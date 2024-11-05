<?php

function tryingsomething() {

    // Display name and age
    function number1() {
        $name = "Syahmi";
        $age = 20;
        echo "Hello $name, you are $age years old. \n";
    }

    // Display PI
    function number2() {
    define("PI",3.14);
    echo PI ."\n";
    }

    // Display example of if-else statement
    function number3() {
        $age = 20;
        if ($age >= 18) {
            echo "You are an adult. \n";
        } else {
            echo "You are a minor. \n";
        }
    }

    // This is an example of using switch statement
    function number4() {
        $day = "Tuesday";
        switch ($day) {
            case "Monday":
                echo "Today is Monday. \n";
                break;
            case "Tuesday":
                echo "Today is Tuesday. \n";
                break;
            case "Wednesday":
                echo "Today is Wednesday. \n";
                break;
            default:
                echo "Today is not a weekday. \n";
        }
    }

    function number5() {
        echo "1. For loop \n";
        echo "2. While loop \n";
        echo "3. Do while loop \n";
        echo "4. Foreach loop \n";
        echo "What type of loop you want to use?";
        $loop = trim(fgets(STDIN));
        if ($loop == 1) {
            // This is an example of using for loop
            for ($i = 1; $i <= 10; $i++) {
                echo "$i \n";
            }
        } elseif ($loop == 2) {
            $i = 1;
            while ($i <= 10) {
                echo "$i \n";
                $i++;
            }
        } else {
            echo "Invalid input. \n";
        }
    }

    echo "Press a number to display a function: ";
    $number = trim(fgets(STDIN));
    if ($number == 1) {
        number1();
        } elseif ($number == 2) {
            number2();
            } elseif ($number == 3) {
                number3();
                }elseif ($number == 4) {
                    number4();
                    } elseif ($number == 5) {
                        number5();
                        } else {
                        echo "Invalid input.";
                        }
}

tryingsomething();
?>