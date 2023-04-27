<?php

function isDivisible($dividend, $divisor) {
  return $dividend % $divisor === 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $inputNumber = (int)$_POST["number"];

  if ($inputNumber <= 0) {
    echo "Будь ласка, введіть додатнє число.";
    exit();
  }

  echo 'Ваше число: ' . $inputNumber . '<br><hr>';

  for ($i = 1; $i <= $inputNumber; $i++) {
    if (!isDivisible($inputNumber, $i)) {
      continue;
    }

    if ($i > 100) {
      break;
    }

    echo $i . "<br>";
  }

  echo "<br>"; 
}

?>

<a href="index.php">Головна</a>
