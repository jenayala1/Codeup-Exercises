<?php

//========== INSTRUCTOR SOLUTION ======================
// ==== STEP #1 - 
//Download technology-companies file to exercises directory:

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];


// ==== STEP #2 ====
//Add code to output the $companies array in its current form.
print_r($companies);

// ==== STEP #3 ====
//Sort the $companies array by company name and output the results.
ksort($companies);
print_r($companies);

// ==== STEP #4 ====
//Sort the people in each company alphabetically. 
//Use a foreach loop and will need to reassign each inner array after sorting. Output the result.
foreach ($companies as $key => $company) {  
    asort($company);
    $companies[$key] = $company;
    print_r($company) . print_r($people);
}

//to set

// ==== STEP #5 ====
//Sort the companies from "biggest" to "smallest". This may be easier than you think, but be sure you don't loose the company names!
arsort($companies);  
print_r($company);



//Alternative lesson notes on todos:
$todos = [
    'todo1' => 'take out trash',
    'todo2' => 'do the dishes'
];

foreach($todos as $key => $todo) {
    $todo[$key] = ucfirst($todo); //$todo is a copy of $todos[$key]   
}
print_r($todos);