<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$pets = [
    [
        'species' => 'Hond',
        'name' => 'Hindley',
        'age' => 8
    ],
    [
        'species' => 'Kat',
        'name' => 'Elio',
        'age' => 6
    ],
    [
        'species' => 'Capybara',
        'name' => 'John',
        'age' => 5
    ]
];

echo "Naam van het derde huisdier: " . $pets[2]['name'] . "<br>";
echo "Soort van het derde huisdier: " . $pets[2]['species'] . "<br>";

echo "<br>";

$pets[1]['age'] += 1;

$pets[] = [
    'species' => 'hamster',
    'name' => 'Moca',
    'age' => 2
];

foreach ($pets as $index => $pet) {
    echo "<strong>Huisdier " . ($index + 1) . ":</strong><br>";
    echo "Soort: " . $pet['species'] . "<br>";
    echo "Naam: " . $pet['name'] . "<br>";
    echo "Leeftijd: " . $pet['age'] . "<br><br>";
}
    ?>
</body>
</html>