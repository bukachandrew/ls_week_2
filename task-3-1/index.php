<?php
include "src/functions.php";
// 1.
$users = [];
$names = ["Anton", "Genadiy", "Sergey", "Andrey", "Vitaliy"];
for ($i = 0; $i <= 50; $i++) {
    $users[] = [
        'id' => 1,
        'name' => $names[array_rand($names)],
        'age' => random_int(18, 45)
    ];
}
fileWrite(json_encode($users), 'users.json');

// 2.
$file = json_decode(fileRead('users.json'));
echo '<pre>';
print_r($file);
echo '</pre>';
echo "<br>";

// 3.
$counts = [];
foreach ($file as $user) {
    if (!isset($counts[$user->name])) {
        $counts[$user->name] = 0;
    }
    $counts[$user->name] += 1;
}

foreach ($counts as $key => $count) {
    echo $key . " = " . $count . "<br>";
}
echo "<br>";

// 4.
$ages = array_column($file, 'age');
$result = array_sum($ages) / count($file);
echo "Средний возраст - " . round($result);
