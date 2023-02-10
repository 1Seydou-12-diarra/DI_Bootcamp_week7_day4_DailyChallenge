<?php

$json_data = file_get_contents("my_data.json");
$data = json_decode($json_data, true);

// var_dump($data);

foreach ($data['Student'] as $item) {
    echo "Name: " . $item['Name'] . "<br>";
    echo "Age: " . $item['Roll'] . "<br>";
    echo "City: " . $item['subject'] . "<br>";
    echo "<br>";
}
?>