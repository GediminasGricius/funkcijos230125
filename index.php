<?php

/**
 * Suskaičiuoja dviejų skaičių sumą
 *
 * @param $x
 * @param $y
 * @return mixed skaičių suma
 */
/*
 *
 $x=20;
$y=8;
 function suma(int $x,int  $y)  {
     return $x+$y;
 }

 function laipsniuIrPrideti(int $x, int $laipsnis=2, int $prideti=0){
     $rezultatas=1;
     for($i=0; $i<$laipsnis; $i++){
         $rezultatas*=$x;
     }
     return $rezultatas+$prideti;
 }

 $mas=[2,6,1,3];
 asort($mas);


 echo  laipsniuIrPrideti(prideti:5, x:9 )."<br>";
 echo  $x.' - '.$y;
*/

function laipsniuIrPrideti(int $x, int $laipsnis=2, int $prideti=0){
    $rezultatas=1;
    for($i=0; $i<$laipsnis; $i++){
        $rezultatas*=$x;
    }
    return $rezultatas+$prideti;
}


$projects = array(
    array('id' => '1', 'short_name' => 'BIO-C3', 'year' => '2014', 'program' => 'BONUS', 'price' => '3700000'),
    array('id' => '2', 'short_name' => 'TRIPOLIS', 'year' => '2014', 'program' => 'LMT', 'price' => '79385'),
    array('id' => '4', 'short_name' => 'BALTCOAST', 'year' => '2015', 'program' => 'BONUS', 'price' => '2868208'),
    array('id' => '5', 'short_name' => 'BSCP', 'year' => '2015', 'program' => 'EASME', 'price' => '784000'),
    array('id' => '6', 'short_name' => 'BALMAN', 'year' => '2015', 'program' => 'LMT,  Lithuania - Latvia - China (Taiwan) research project fund', 'price' => '667623'),
    array('id' => '8', 'short_name' => 'MAURAKUMA', 'year' => '2014', 'program' => 'LMT', 'price' => '78921'),
    array('id' => '9', 'short_name' => 'BALSAM', 'year' => '2013', 'program' => 'European Commission, Marine Strategy Framework Directive pilot projects', 'price' => '461803'),
    array('id' => '10', 'short_name' => 'DEVOTES', 'year' => '2012', 'program' => 'European Commission, 7 BP', 'price' => '136651'),
    array('id' => '11', 'short_name' => 'MARES', 'year' => '2012', 'program' => 'ERASMUS MUNDUS, Horizon 2020', 'price' => '100800'),
    array('id' => '12', 'short_name' => 'VECTORS', 'year' => '2012', 'program' => 'European Commission, 7 BP', 'price' => '15237662'),
    array('id' => '13', 'short_name' => 'DENOFLIT', 'year' => '2010', 'program' => 'LIFE+ Nature & Biodiversity', 'price' => '1569699'),
    array('id' => '14', 'short_name' => 'TRUFFLE', 'year' => '2012', 'program' => 'Latvia-Lithuania Cross Border Cooperation Programme ', 'price' => '319440'),
    array('id' => '15', 'short_name' => 'LAKES FOR FUTURE', 'year' => '2012', 'program' => 'Latvia-Lithuania Cross Border Cooperation Programme ', 'price' => '1012554'),
    array('id' => '16', 'short_name' => 'IANUS', 'year' => '2012', 'program' => 'LMT', 'price' => '221530'),
    array('id' => '17', 'short_name' => 'PROTEUS', 'year' => '2012', 'program' => 'LMT', 'price' => '99542'),
    array('id' => '18', 'short_name' => 'SAMBAH', 'year' => '2010', 'program' => 'LIFE+ Nature & Biodiversity', 'price' => '80282'),
    array('id' => '19', 'short_name' => 'PREHAB', 'year' => '2010', 'program' => 'BONUS', 'price' => '263630'),
    array('id' => '20', 'short_name' => 'KRABAS', 'year' => '2011', 'program' => 'LMT', 'price' => '43153'),
    array('id' => '21', 'short_name' => 'MEECE', 'year' => '2008', 'program' => 'European Commission, 7 BP', 'price' => '6499745'),
    array('id' => '22', 'short_name' => 'EEE', 'year' => '2008', 'program' => 'The Norwegian Financial Mechanism and the Republic of Lithuania', 'price' => '989072'),
    array('id' => '23', 'short_name' => 'MOPODECO', 'year' => '2010', 'program' => 'Nordic countries Council of Ministers', 'price' => '100544'),
    array('id' => '24', 'short_name' => 'Cross-border DISCOS', 'year' => '2012', 'program' => 'Latvia-Lithuania Cross Border Cooperation Programme ', 'price' => '778108'),
    array('id' => '25', 'short_name' => 'Cross-border DISCOS', 'year' => '2012', 'program' => 'Latvijos ir Lietuvos bendradarbiavimo per sieną programa - LATLIT', 'price' => '778'),
    array('id' => '26', 'short_name' => 'JRTC', 'year' => '2010', 'program' => 'LATLIT, Interreg, Latvia-Lithuania Cross Border Cooperation Programme ', 'price' => '528793')
);



$order=isset($_GET['order'])?$_GET['order']:"";
$dir=isset($_GET['dir'])?$_GET['dir']:"";
$invert=($dir=='asc')?1:-1;
/*
usort($projects, function ($a, $b) use ($order){
   return $a[$order] <=> $b[$order];
});
*/
usort($projects, fn ($a, $b)=> ($a[$order] <=> $b[$order]) * $invert);
/*
usort($projects, function ($a, $b) use ($order){
    if ($order=='price'){
        return $a['price'] <=> $b['price'];
    }
    if ($order=='year'){
        return $a['year'] <=> $b['year'];
    }
});
*/
/*
if ($order=='price') {
    usort($projects, function ($a, $b) {
        return $a['price'] <=> $b['price'];
    });
}
if ($order=='year') {
    usort($projects, function ($a, $b) {
        return $a['year'] <=> $b['year'];
    });
}
*/

 function printTableLink($caption, $field,$order, $dir){
      $dir=($order==$field && $dir=='asc')?'desc':'asc';

      echo "<a href='?order=$field&dir=$dir'>";
      echo "$caption";
      echo ($dir=='asc')? "&downarrow;":"&uparrow;";
      echo "</a>";
 }



 require_once "gediminas.php";
 require_once "jonas.php";

 $d=new \Gediminas\Darbuotojas();

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Projektų sąrašas</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Projekto pavadinimas</th>
                                    <th>
                                        <?php printTableLink('Metai', 'year', $order, $dir) ?>
                                    </th>
                                    <th>
                                        <?php printTableLink('Programa', 'program',$order, $dir) ?>
                                    </th>
                                    <th>
                                        <?php printTableLink('Kaina', 'price',$order, $dir) ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($projects as $project) { ?>
                                <tr>
                                    <td><?=$project['short_name']?></td>
                                    <td><?=$project['year']?></td>
                                    <td><?=$project['program']?></td>
                                    <td><?=$project['price']?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>


