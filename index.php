<?php
$books = [
    [
        'title' => 'book 1',
        'author' => 'author 1',
        'year' => 2003,
        'genre' => 'romance'
    ],
    [
        'title' => 'book 2',
        'author' => 'author 2',
        'year' => 2008,
        'genre' => 'biography'
    ],
    [
        'title' => 'book 3',
        'author' => 'author 3',
        'year' => 2010,
        'genre' => 'detective'
    ],
    [
        'title' => 'book 4',
        'author' => 'author 4',
        'year' => 1999,
        'genre' => 'detective'
    ],
    [
        'title' => 'book 5',
        'author' => 'author 5',
        'year' => 2001,
        'genre' => 'classic'
    ],
];

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

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>

        <h2>Books</h2>

        <table>
            <thead>
                <?php foreach ($books[0] as $book_idx => $value): ?> 
                <th><?php print $book_idx; ?></th>
            <?php endforeach; ?>
        </thead>
        <tbody>

            <?php foreach ($books[0] as $book_key => $value): ?>
                <tr>
                    <td><?php print $value; ?></td>
                </tr>
            <?php endforeach; ?>

            <tr>
                <?php foreach ($books[1] as $book_key => $value): ?>
                    <td><?php print $value; ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach ($books[2] as $book_key => $value): ?>
                    <td><?php print $value; ?></td>
                <?php endforeach; ?>
            </tr>
        </tbody>

    </table>

</body>
</html>