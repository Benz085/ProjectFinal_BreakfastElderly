<?php
$charts = [

    'chart' => ['type' => 'column'],
    'title' => ['text' => 'fruit Consumption'],
    'xAxis' => [
        'categories' => ['apples' , 'bananas'],
    ],
    'yAxis' => [
        'title' => [
            'text' => 'Fruit Eaten'
        ]
    ],
    'series' => [
        [
            'name' => 'Reza',
            'data' => [1,2]
        ],
        [
            'name' => 'Kika',
            'data' => [2,4]
        ],
    ]
];

echo Chart::display("id-highchartsnya", $charts);

?>