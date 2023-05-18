<?php

    $lists = [
      [
        'text'=>'Fare la spesa',
        'done'=> false
      ],
      [
        'text'=>'Finire Esercizi Vue',
        'done'=> true
      ],
      [
        'text'=>'Fare la Lavatrice',
        'done'=> false
      ],
      [
        'text'=>'Fare bagnetto a Nedo',
        'done'=> true
      ],
      [
        'text'=>'Comprare crocchette per Nedo',
        'done'=> true
      ],
    ];

    //salvo l'array in un json
    $json_string = json_encode($lists);
    //genero un file json
    file_put_contents('todo-list.json',json_encode($lists));
?>