<?php

$Gheymeh = $_POST["Gheymeh"];
$GhormehSabzi = $_POST["GhormehSabzi"];
$Kebab = $_POST["Kebab"];
$Pizza = $_POST["Pizza"];
$Lasagna = $_POST["Lasagna"];
$CheeseBurger = $_POST["CheeseBurger"];
$FriedChicken = $_POST["FriedChicken"];
$Pasta = $_POST["Pasta"];
$Soup = $_POST["Soup"];
$Doogh = $_POST["Doogh"];
$Soda = $_POST["Soda"];

$total = 0;

$total += $Gheymeh * 425;
$total += $GhormehSabzi * 390;
$total += $Kebab * 622;
$total += $Pizza * 600;
$total += $Lasagna * 950;
$total += $CheeseBurger * 580;
$total += $FriedChicken * 650;
$total += $Pasta * 410;
$total += $Soup * 80;
$total += $Doogh * 20;
$total += $Soda * 30;

echo "<html dir='rtl'>";

echo "
<style>
@font-face {
    font-family: 'B Koodak';
    src: url('font/BKoodkBd.ttf') format('truetype');
}

@keyframes load {
    from{padding-right: 2000%;}
    to{padding-right: 0%;}
}

body {

    font-family: B Koodak;
    background-color: rgb(74, 45, 121);
    color: #ffffff;
    padding-top: 10%;
    animation-name: load;
    animation-duration: 2s;

}

.pedar {
    font-family: B Koodak;
    background-color: rgba(172, 146, 0, 0.856);
    border-radius: 25px;
    width: fit-content;
    padding: 5%;
    
}

@keyframes a {
    from{width: 90%;}
    to{width: 60%;}
}

@keyframes b {
    from{width: 60%;}
    to{width: 90%;}
}

.btn {

    background-color: rgb(74, 45, 121);
    border-radius: 25px;
    color: #ffffff;
    font-size: x-large;
    border: none;
    padding: 1%;
    width: 20%;
    animation-name: a;
    animation-duration: 2s;

}

.btn:hover {

    width: 50%;
    animation-name: b;
    animation-duration: 2s;

}
</style>
";

echo "<center>";

echo "<div class='pedar'>";

echo "
<h1 style='font-size: 500%;'>

</h1>
";

echo "
<h2>
 فاکتور شما 
</h2>
";

echo "<hr><br>";

if ($Gheymeh > 0) {
    echo " 
    قیمه :
     $Gheymeh
      عدد
       <br>";
}
if ($GhormehSabzi > 0) {
    echo " 
    قورمه سبزی :
     $GhormehSabzi
      عدد
       <br>";
}
if ($Kebab > 0) {
    echo " 
    کباب :
     $Kebab
      عدد
       <br>";
}
if ($Pizza > 0) {
    echo " 
    پیتزا :
     $Pizza
      عدد
       <br>";
}
if ($Lasagna > 0) {
    echo " 
    لازانیا :
     $Lasagna
      عدد
       <br>";
}
if ($CheeseBurger > 0) {
    echo " 
    چیزبرگر :
     $CheeseBurger
      عدد
       <br>";
}
if ($FriedChicken > 0) {
    echo " 
    فیله سوخاری :
     $FriedChicken
      عدد
       <br>";
}
if ($Pasta > 0) {
    echo " 
    پاستا آلفردو :
     $Pasta
      عدد
       <br>";
}
if ($Soup > 0) {
    echo " 
    سوپ :
     $Soup
      عدد
       <br>";
}
if ($Doogh > 0) {
    echo " 
    دوغ :
     $Doogh
      عدد
       <br>";
}
if ($Soda > 0) {
    echo " 
    نوشابه :
     $Soda
      عدد
       <br>";
}
echo "<br>";
echo "<hr>";

echo "<br> 
قیمت کل :
$total 
هزار تومان";

echo "</div>";

echo "</center>";

?>