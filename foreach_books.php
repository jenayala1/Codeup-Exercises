<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ),
      'Lord of the Rings' => array(
        'published' => 1968,
        'author' => 'J. R. R. Tolkien',
        'pages' => 1178
    )
);

foreach($books as $key => $book) {

	echo "======================" . PHP_EOL;
	
	foreach($book as $key => $attribute) {
	 	if ($book['published'] > 1950){
	 		echo "$key" . PHP_EOL;
	 		echo "{$key}: {$attribute}" . PHP_EOL;
	 	}
	}

//step #3
foreach($books as $key => $book) {
	if ($book['published'] > 1950){
		echo "$key" . PHP_EOL;
	}	
	
		foreach($book as $key => $attribute) {
	 		echo "{$key}: {$attribute}" . PHP_EOL;
	 	}
}
echo "======================" . PHP_EOL;

// ================================= BONUS EXERCISES: FOREACH WITH KEYS (9:30)

// 1) Update loop to only include books with less than 300 pages
// 2) Create a new loop that outputs the average page length and year of publication of the books in the books array 
// 3) Add the following entry to the $books array:
//     'Lord of the Rings' => array(
//         'published' => 1968,
//         'author' => 'J. R. R. Tolkien',
//         'pages' => 1178
//     )
// Construct another loop that iterates through each book as in the exercise step 2 
// but the loop should only list the first book of a given author in the books array.

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ),
      'Lord of the Rings' => array(
        'published' => 1968,
        'author' => 'J. R. R. Tolkien',
        'pages' => 1178
    )
);

foreach($books as $key => $book) {
	// $countBooks = count($book);
	// echo "Total books is $countBooks" . PHP_EOL;
	// $pageSum = array_sum($books['pages']);
	// $pageAverage = $pageSum/$countBooks;

	// $publishedSum = array_sum($books['published']);
	// $pubAverage = $publishedSum/$countBooks;

	echo "======================" . PHP_EOL;
	echo "$key" . PHP_EOL;


	foreach($book as $key => $attribute) {
	 	if ($book['pages'] < 300){
	 		echo "{$key}: {$attribute}" . PHP_EOL;
	 	}
	}
}







	
}