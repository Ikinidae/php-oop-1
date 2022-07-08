<?php

class Movies
{
    public $title;
    public $type;
    public $duration;
    public $pegi;

    public function __construct($title, $type, $duration, $pegi)
    {
        $this->title = $title;
        $this->type = $type;
        $this->duration = $duration;
        $this->pegi = $pegi;
    }

    public function movies_pegi($eta) {
        if ($eta < $this->pegi) {
            return '<br> Sei troppo giovane per guardare questo film </br>';
        } else {
            return '<br> Buona visione! </br>';
        }
    }

    public function print_card($eta) {
        return "<h1>Title: {$this->title}</h1>
        <h3>Type: {$this->type}</h3>
        <h3>Duration: {$this->duration} min </h3>" .
        $this->movies_pegi($eta);
    }
}

$Movie1 = new Movies("Star Wars", "Fantasy", 120, 18);
$Movie2 = new Movies("Lord of the Rings", "Fantasy", 160, 18);
$Movie3 = new Movies("Coco", "Animated", 110, 0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        echo $Movie1->print_card(20);
        echo $Movie2->print_card(15);
        echo $Movie3->print_card(5);
    ?>
</body>

</html>