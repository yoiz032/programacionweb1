<?php 
$producto1='arroz';
$producto2='papa';
$producto3='huevos';
$producto4='frijoles';
$producto5='pasta';
$producto6='leche';
$producto7='sal';
$producto8='azucar';
$producto9='cerveza';
$producto10='carne';


$precio1=10000;
$precio2=15000;
$precio3=12000;
$precio4=4000;
$precio5=3000;
$precio6=6000;
$precio7=800;
$precio8=2000;
$precio9=49000;
$precio10=25000;

$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;

echo("la suma total es:". $total);

if($total<=80000){
    echo("gracias por su compra");
}else{
    echo("no le alcanza");
}

?>