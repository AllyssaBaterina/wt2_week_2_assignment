</h2>Computing Fahrenheit And Celsius</h2>
<hr>

<h3> Celsius to Fahrenheit </h3>
<?php
function cel($val1){
    return (9/5 * $val1) + 32;
}
    echo cel(110);

?>

<hr> 
<h3> Fahrenheit to Celsius </h3>
<?php
function fah($val2){
        return 5/9 * ($val2 - 32);
    }
        echo fah(110);
?>

