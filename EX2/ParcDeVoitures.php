<?php
class Voiture
{
    public $carNumber;
    public $date;
    public $km;
    public $model;
    public $brand;
    public $color;
    public $weight;

    public $available = true;
    public $type = 'commerciale';
    public $country = '';
    public $useTime = 'low';
    public $years;
    
    function __construct($carNumber, $date, $km, $model, $brand, $color, $weight)
    {
        $this->carNumber = $carNumber;
        $this->date = $date;
        $this->km = $km;
        $this->model = $model;
        $this->brand = $brand;
        $this->color = $color;
        $this->weight = $weight;

        if ($brand === 'Audi') {
            $this->available = false;
        }
        
        if ($weight > 3.5) {
            $this->type = 'utilitaire';
        }

        $iso = strtoupper(substr($carNumber, 0, 2));
        
        if ($iso === 'BE') {
            $this->country = 'Belgique';
        } elseif ($iso === 'FR') {
            $this->country = 'France';
        } elseif ($iso === 'DE') {
            $this->country = 'Allemagne';
        }

        if ($this->km > 100000) {
            $this->useTime = 'middle';
        }
        if ($this->km > 200000) {
            $this->useTime = 'aight';
        }

        $now = new DateTime();
        $this->years = ($now->diff($this->date))->y;
    }
}

function display($voiture, $url)
{
    $html = '<div>';
    $html .= '<img src="'.$url.'" />';
    $html .= '<ul>';
    $html .= '<li>'.$voiture->carNumber.'</li>';
    $html .= '<li>'.$voiture->date->format('Y-m-d').'</li>';
    $html .= '<li>'.$voiture->km.'</li>';
    $html .= '<li>'.$voiture->model.'</li>';
    $html .= '<li>'.$voiture->brand.'</li>';
    $html .= '<li>'.$voiture->color.'</li>';
    $html .= '<li>'.$voiture->weight.'</li>';
    $html .= '<li>'.$voiture->available.'</li>';
    $html .= '<li>'.$voiture->type.'</li>';
    $html .= '<li>'.$voiture->country.'</li>';
    $html .= '<li>'.$voiture->useTime.'</li>';
    $html .= '<li>'.$voiture->years.'</li>';
    $html .= '</ul>';
    $html .= '</div>';
    echo $html;
    
}

$firstCar = new Voiture('BETYS025', new DateTime('2011-03-12'), 25000, '206+',
    'Peugeot', 'Antracit', 1);

display($firstCar, 'http://www.cars-data.com/pictures/thumbs/350px/peugeot/peugeot-206_1972_1.jpg');

$secondCar = new Voiture('DEKYS124', new DateTime('2015-10-25'), 6370, 'F12 Berlinetta',
'Ferrari', 'Red', 1);

display($secondCar, 'http://www.cars-data.com/pictures/thumbs/350px/ferrari/ferrari-f12-berlinetta_615_1.jpg');

$thirdCar = new Voiture('FRKYS124', new DateTime('2017-11-10'), 100, 'Niro 1.6 GDi Hybrid DynamicLine',
'Kia', 'Blue', 4);

display($thirdCar, 'http://www.cars-data.com/pictures/thumbs/350px/kia/kia-niro_3840_1.jpg');

/*print_r($firstCar);*/
