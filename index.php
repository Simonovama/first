<?php header("content-Type: text/html; charset=utf-8");
//Задание 1
$name = Марина;
$age= 25;
 echo "Меня зовут $name <br/>";
echo "Мне $age лет<br/>";?>

<?php
// Выбор автомобиля из 3, предложение кредитования при возрасте >23 и <55
 $a= 'BAW Fenix 33462'; $b= 'JBC 1041'; $c= 'JAC N56';
echo "Выбранный автомобиль $a<br/>";
if ($age > 23 && $age < 55)
{echo "Вы можете купить авто в кредит <br/>";}
else {echo "Кредитование невозможно <br/>";}?>

<?php
//Задание 2
$name2 = Марина;
//$age2= 25;
echo "Меня зовут $name2 <br/>";
echo "Мне 25 лет <br/>";
echo "Мне $age2 лет<br/>";?>

<?php
//Задание 3.Ввод константы Первоначальный взнос и присвоение значения 30%, изменение значения константы
define("ПВ",30);
if (defined('ПВ')) {
    echo 'true<br/>';}
echo ПВ;
define("ПВ",45);
echo ПВ;
// Изменить значеник константы не удалось
?>

<?php
//Задание 4
$age4= 0;
if ($age4 > 18 && $age4 <= 65){echo "<br/>Вам еще работать и работать! <br/>";}
if ($age4 > 65){echo "<br/>Вам пора на пенсию <br/>";}
if ($age4 > 1 && $age4 <= 17){echo "<br/>Вам еще рано работать <br/>";}
else {echo "<br/>Неизвестный возраст <br/>";}
?>

<?php
//Возрастные периоды жизни человека.
$age5=25;
echo "Ваш возраст $age5 <br/>";
if ($age5 > 0 && $age5 <= 10){echo "Это соответствует периоду детство <br/>";}
if ($age5 > 10 && $age5 <= 15){echo "Это соответствует подростковому возрасту <br/>";}
if ($age5 > 15 && $age5 <= 18){echo "Это соответствует периоду юность <br/>";}
if ($age5 > 18 && $age5 <= 30){echo "Это соответствует периоду молодость <br/>";}
if ($age5 > 30 && $age5 <= 60){echo "Это соответствует периоду зрелость <br/>";}
if ($age5 > 60){echo "Это соответствует периоду старость <br/>";}
?>

<?php
//Задание 5
$day=6;
switch ($day) {
    case '1':
    case '2':
    case '3':
    case '4':
    case '5':
        echo 'Это рабочий день';
		break;
    case '6':
    case '7':
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
		break;}
?>

<?php
//Вывод стоимости автомобиля в зависимости от выбранной комплектации
$Комплектация =Базовая;
switch ($Комплектация) {
    case 'Базовая':  echo '<br/>Стоимость 1000000 рублей';
        break;
    case 'Оптимальная':  echo '<br/>Стоимость 1200000 рублей';
        break;
    case 'Максимальная':  echo '<br/>Стоимость 1500000 рублей';
        break;
    default:
        echo '<br/>Неизвестная комплектация';
        break;}
?>

<?php
$car2["<br/>BMW"]=array(
    "Model"=>"X5",
    "Speed"=>"120",
    "Doors"=>"5",
    "Year"=>"2015");
foreach ($car2 as $name => $value) {echo $name." ".$value["Model"]." ".$value["Speed"]." ".$value["Doors"]." ".$value["Year"]." ";}
?>

<?php
$car1["<br/>Toyota"]=array(
"Model"=>"Corolla",
"Speed"=>"150",
"Doors"=>"4",
"Year"=>"2013");
foreach ($car1 as $name => $value) {echo $name." ".$value["Model"]." ".$value["Speed"]." ".$value["Doors"]." ".$value["Year"]." ";}
?>

<?php
$car["<br/>Opel"]=array(
"Model"=>"Insignia",
"Speed"=>"200",
"Doors"=>"5",
"Year"=>"2013");
foreach ($car as $name => $value) {echo $name." ".$value["Model"]." ".$value["Speed"]." ".$value["Doors"]." ".$value["Year"]." ";}
?>

<?php //Задача вывод данных по заявке на кредит.
$File["<br/>Заявка"]=array(
"Фамилия"=>"Иванов",
"Авто"=>"JAC",
"Стоимость"=>"1200000",
"Взнос"=>'30%');
foreach ($File as $name => $value) {echo $name." ".$value["Фамилия"]." ".$value["Авто"]." ".$value["Стоимость"]." ".$value["Взнос"]." ";}
?>