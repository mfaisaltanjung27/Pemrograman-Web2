
<?php
function test() {
    static $a = 0; // variabel static
    echo "Nilai a : ";
    echo $a;
    echo "<br>";
    $a++;
}

test();
test();
test();
test();
test();
?>

