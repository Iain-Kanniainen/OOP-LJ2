<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $books = [
    'book1' => [
        'title' => 'The stranger',
        'author' => 'Albert Camus',
        'pages' => 123
    ],
    'book2' => [
        'title' => 'Wuthering Heights',
        'author' => 'Emily Bronte',
        'pages' => 464
    ],
    'book3' => [
        'title' => 'Dream of the red chamber',
        'author' => 'Cao Xueqin',
        'pages' => 992
    ]
];

$books['book1']['pages'] = 350;

$books['book4'] = [
    'title' => 'De Ontdekking van de Hemel',
    'author' => 'Harry Mulisch',
    'pages' => 900
];

foreach ($books as $key => $book) {
    echo "<strong>$key:</strong><br>";
    echo "Titel: " . $book['title'] . "<br>";
    echo "Auteur: " . $book['author'] . "<br>";
    echo "Pagina's: " . $book['pages'] . "<br><br>";
}
    ?>
</body>
</html>