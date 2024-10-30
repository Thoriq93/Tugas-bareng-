<?php
// Program menggunakan "continue" untuk melewatkan iterasi saat nilai adalah bilangan genap

for ($i = 1; $i <= 24; $i++) {
    if ($i % 2 == 0) {
        continue; // Melewatkan iterasi jika $i adalah bilangan genap
    }
    echo $i . "<br>";
}
?>