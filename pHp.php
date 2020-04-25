<?php

//začátek prvního úkolu

$data = "pansízn";


$a = 4;
$b = 2;




$pravda = true;        //boolean 
$jméno = "Lindemann";  //string
$desetine = 10.5;      //float
$normalni = 2;         //string




echo "legolas";
echo '<br>';
echo $data;
echo '<br>';
echo "<strong>sabaton</strong>";






echo "<br><br>";


echo '<img src="pw-image.jpeg" width="650px">'; //obrazek

echo'<br><br><br><br>';


var_dump($a+$b);   //priklad spojovani retezcu

echo'<br>';

echo'\\'; //zpetne lomitko

echo '<br><br>';

var_dump($a+$b);   //aritmeticke
var_dump($a-$b);
var_dump($a/$b);
var_dump($a*$b);

echo '<br><br>';

var_dump($a++);   //prirovnavaci
var_dump($a--);
var_dump($a+=$b);
var_dump($a-=$b);
var_dump($a*=$b);
var_dump($a/=$b);

echo "<br><br>";

var_dump($a == $b); //porovnavaci
var_dump($a != $b);
var_dump($a>$b);
var_dump($a<$b);

echo '<br><br>';

var_dump($a||$b);  //logicke
var_dump($a && $b);
var_dump(!$a);

//konec prvního úkolu

echo '<br>';



//začátek druhého úkolu


$FrantaMatějka1 ="5";                    // 3 otázka 
$FrantaMatějka2 ="1";


if ($FrantaMatějka1 < $FrantaMatějka2){  // pravda nepravda pomocí if,else
    echo"pravda";
    echo"<br>";
}else {
    echo 'nepravda';
}


   

echo '<br><br>';

echo 'František';                        // 4 otázka
echo '<br>';
echo 'Matějka';


echo '<br><br>';

if($FrantaMatějka1 > $FrantaMatějka2){   // 5 otázka
    echo'František';
}else {
    echo 'Matějka';
}


echo '<br>';

if($FrantaMatějka1 < $FrantaMatějka2){ 
    echo 'František';
}else{
    echo 'Matějka';
}



    echo'<br><br><br>';




if($FrantaMatějka1 < 10){              // 6 otázka

if($FrantaMatějka2 < 5){
    echo'František';
    }
}else{
    echo'Matějka';
}

    echo '<br><br>';

switch (3){                           // 7 otázka
    
    case 1:
        echo"$FrantaMatějka1";
        break;
    case 2:
        echo"$FrantaMatějka2";
        break;
    case 3:
        echo"$FrantaMatějka1";
        break;
    case 4:
        echo"$FrantaMatějka2";
        break;
    case 5:
        echo "$FrantaMatějka1";
        break;
    case 6:
        echo $FrantaMatějka2;
        break;

    default:
        echo"ahojda";
        break;

}


    echo"<br>";

    
    $songy = array( 1=>"Duality", "Last Battle", "Revolter", "Sanctified with dynamite",  // 8 otázka
                    "Knebel", "Nothing Else Matters", "Du Hast", "Far from the Fame",
                    "Devil in I", "From Hell with Love",
                    
        );
    
    
        var_dump($songy);
        
       echo "<br><br><br>";
       
       
       
       
       $kapely ["metal"]["power metal"]["kapela"] ["Sabaton"]["song"]  = "Sparta";       // 9 otázka
       $kapely ["metal"]["power metal"]["kapela"]["Powerwolf"]["song"] = "Stossgebet"; 
       $kapely ["metal"]["industria lmetal"]["kapela"]["Rammstein"]["song"] = "Du Hast";
       $kapely ["metal"]["nu metal"]["kapela"]["Slipknot"]["song"] = "Before I forget";
       $kapely ["metal"]["power metal"]["kapela"]["Beast in Black"]["song"] = "Oceandeep";
       $kapely ["metal"]["power metal"]["kapela"]["Ghost"]["song"] = "Rats";
       $kapely ["metal"]["heawy metal"]["kapela"]["Black Sabbath"]["song"] = "Paranoid";
       $kapely ["metal"]["psy-core"]["kapela"]["Dymytry"]["song"] = "300";
       $kapely ["metal"]["nu metal"]["kapela"]["Skillet"]["song"] = "Monster";
       $kapely ["metal"]["heawy metal"]["kapela"]["Mettalica"]["song"] = "Master of Puppets";
    
    

       var_dump($kapely);
       
       echo "<br><br>"
?>