<?php

$array =[
    "3"=>[
        "3.1"=>"name",
        "3.2"=>"age",
        "3.3"=>[
            "3.3.1"=>"kontum",
            "3.3.2"=> "dakglei",
            "3.3.3"=>"daklong"
        ]
        ],
    "4"=>[
        "4.1"=>"name",
        "4.2"=>"age",
        "4.3"=>[
            "4.4.1"=>"nghe an",
            "4.4.2"=>"lam son",
            "4.4.3"=>"hu tieu"
        ]
    ]
];
echo "<br> <br> <br> <br> <br> this is for!!";
foreach($array as $k=>$v){
    echo "<br>" .$k ."<br>";
    foreach($v as $key1=>$value1){
      echo $key1."=>".$value1 ."<br>";
            foreach($value1 as $key2=>$value2){
                echo $key2 ."=>".$value2."<br>";
            }
    }
    }
?>
