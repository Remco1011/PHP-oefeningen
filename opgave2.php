<html> 
    <head>
    <title> Kilometer berekening</title>
    </head>
    <body>
<?php
if(isset ($_POST['submit'])) { 
$vast1 = 25 ; 
$vast2 = 35 ;
$type1 = 0.75 ;
$type2 = 1.25 ;
$km1 = $_POST['aantalkm'];
$type = $_POST['type'];

if($type==1) 
{$huur= $vast1+( $km1* $type1);
}
else {
$huur = $vast2 + ($km1 * $type2);
    
}
    echo"het aantal km is $km1 <br>" ;
echo "de huurprijs van de auto van type $type is $huur";
}
?>
        
        <form method="post" action="opgave2.php"> 
        <input type="number" placeholder="hoeveel kilometer heeft u gereden" name="aantalkm">
            <label for="typ1">type 1</label><input type="radio" id="typ1" name="type" value="1">
            <label for="typ2">type 2</label><input type="radio" id="typ2" name="type" value="2">
        <button type="submit" name="submit"> verzenden</button>
        </form>
        </body>
</html>
    