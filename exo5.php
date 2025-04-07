<?php
$age = 25;

if ($age < 12) {
    echo "Enfant";
} elseif ($age >= 12 && $age <= 17) {
    echo "Adolescent";
} elseif ($age >= 18 && $age <= 64) {
    echo "Adulte";
} else {
    echo "Senior";
}
?>
