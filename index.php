<?php

$thermometer = [
    ['class' => 'bg-green', 'text' => 'PX'],
    ['class' => 'bg-yellow', 'text' => 'BL'],
    ['class' => 'bg-orange', 'text' => 'NX'],
    ['class' => 'bg-red', 'text' => 'PZ2A'],    
];

$stories = [
    [
        'class' => 'text-green',
        'stories' => [
            'Atsikėliau', 
            'Prabudau', 
            'Išlipau iš lovos'
        ],
    ],
    [
        'class' => 'text-yellow',
        'stories' => [
            'Vėl pirmadienis', 
            'Apšalę mašinos langai', 
            'Nėra ką valgyt pusryčiams'
        ],
    ],
    [
        'class' => 'text-orange',
        'stories' => [
            'Pavėlavau į darbo meetą', 
            'Pamiršau cigaretes',
            'Balandis apšiko švarką'
        ],
    ],   
    [
        'class' => 'text-red',
        'stories' => [
            'Užtvindžiau kaimynus', 
            'Mane užtvindė kaimynai', 
            'Sumaišiau panaudotą katės kraiką su šokoladu'
        ],
    ],
];

$target_state = rand(1, 4);

foreach ($thermometer as $state_idx => $state) {
    if ($state_idx < $target_state) {
        // Set Story
        $story_idx = array_rand($stories[$state_idx]['stories']);        
        $stories[$state_idx]['chosen_story'] = $stories[$state_idx]['stories'][$story_idx];
    } else {
        $thermometer[$state_idx]['class'] = 'white';
        unset($stories[$state_idx]);
    }

    if ($state_idx !== $target_state) {
        $thermometer[$state_idx]['name'] = '';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Thermometer</title>
        <style>
            body {
                background: black;
            }
            
            .container {
                display: flex;
                align-items: center;
            }

            .thermo-circle, .thermo-box {                
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold; 
                color: white;  
                margin-left: 10px;                
            }
            
            .thermo-circle {
                width: 100px;
                height: 100px;
                background-color: green;
                border-radius: 100%;            
            }

            .thermo-box {
                width: 100px;
                height: 50px;
                border: 2px solid grey;                            
            }


            .bg-green {
                background-color: green;
            }

            .bg-yellow {
                background-color: #f3f309;
            }

            .bg-red {
                background-color: red;
            }

            .bg-orange {
                background-color: orange;
            }

            .bg-white {
                background-color: white;
            }
            
            .text-green {
                color: green;
            }
            
            .text-yellow {
                color: yellow;
            }
            
            .text-orange {
                color:  orange;
            }
            
            .text-red {
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="thermo-circle">0</div>
            
            <?php foreach ($thermometer as $state_idx => $state) : ?>
                <div class="thermo-box <?php print $state['class']; ?>">
                    <?php print $state['text']; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <ul>
            <?php foreach ($stories as $story): ?>
                <li class="<?php print $story['class']; ?>">
                    <?php print $story['chosen_story']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>