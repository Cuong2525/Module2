<?php
    $tusach=[
        'mot'=>[
            'ten'=> 'Van hoc',
            'gia'=> '12000'
        ],
        'hai'=>[
            'ten'=> 'su hoc',
            'gia'=> '15000'
        ]
    ];

    $books=[
        'khong' => 'van',
        'mot' => 'su',
        'hai' => 'dia',
    ];



    foreach( $books as $key => $value){
        //khong,mot,hai
        //van,su,dia
        echo '<br>'. $key.'-'.$value;
    }
   
echo'<pre>';
print_r($tusach);
echo'</pre>';
