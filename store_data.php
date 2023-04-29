

<?php

  $name = $_POST['name'];

  $age = $_POST['age'];

  $data = "Name: " . $name . ", Age: " . $age . "\n";

  file_put_contents("data.txt", $data, FILE_APPEND);

?>



