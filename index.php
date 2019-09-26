<?php
$books = [
    [
        'title' => 'book one',
        'author' => 'author 1',
        'year' => 2003,
        'genre' => 'romance'
    ],
    [
        'title' => 'book two',
        'author' => 'author 2',
        'year' => 2008,
        'genre' => 'biography'
    ],
    [
        'title' => 'book three',
        'author' => 'author 3',
        'year' => 2010,
        'genre' => 'detective'
    ],
    [
        'title' => 'book four',
        'author' => 'author 4',
        'year' => 1999,
        'genre' => 'detective'
    ],
    [
        'title' => 'book five',
        'author' => 'author 5',
        'year' => 2001,
        'genre' => 'classic'
    ],
];
var_dump($books);

foreach ($books as $book) {
    $books_age_array[] = $book['year'];
    $avg_books_age = array_sum($books_age_array) / count($books);
}

$avg_age_output = "Average age of all books is $avg_books_age year";
var_dump($avg_books_age);

//Sortina pagal pavadinima

function method1($a, $b) {
    return ($a['title'] <= $b['title']) ? -1 : 1;
}

usort($books, "method1");
var_dump($books);

//sortina pagal metus

function method2($a, $b) {
    return ($a['year'] <= $b['year']) ? -1 : 1;
}
usort($books, "method2");
var_dump($books);

?>

<html>
    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: black;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #dddddd;
            }
            .flex-container {
                display: flex;
                flex-wrap: wrap;
            }

            .text-center {
                text-align: center;
            }
        </style>
    </head>
    <body>

        <h2 class="text-center">Books</h2>

        <table>
            <thead>
            <?php foreach ($books[0] as $book_id => $value): ?> 
                <th><?php print $book_id; ?></th>
            <?php endforeach; ?>
        </thead>
        <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <?php foreach ($book as $book_id => $value): ?>
                            <td><?php print $value; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
    <h3><?php print $avg_age_output; ?></h3>
</body>
</html>