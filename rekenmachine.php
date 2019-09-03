<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <title>Rekenmachine</title>
    <link rel="stylesheet" type="text/css" href="rekenmachine.css">      
</head>
<body>
<main>   
<form method="post" action="rekenmachine.php">
     <table> 
<tr> 
<td>
<input class="y" type="text" name="nummer1" placeholder="Y" required>
<br><br>
<select name="operator" placeholder="Welke methode wilt u gebruiken">  
<option> none</option> 
    <option> +</option> 
    <option> -</option> 
    <option> *</option> 
    <option> :</option> 
    <option>kwadraat</option>
    <option> wortel</option> 
    <option> tafel</option> 
    <option> macht</option>   
</select>                    
<br><br> 
    <input class="x" type="text" name="nummer2" placeholder="X"><br>
<br>
</td>                 
</tr>
<tr> 
<td>
    het antwoord is:</td>
<td>

<?php 
if(isset($_POST['submit'])) {
$result1 = $_POST['nummer1'] ;
$result2 = $_POST['nummer2'] ;
$bereken = $_POST['operator'] ;
    
switch ($bereken) { 
case "none":        
echo"foutmelding u moet een methode invoeren" ;
break ;
case "+": 
    if ((empty($result2)) and $result2 <> "0") {
    echo "U moet x en y invullen" ;    
        }
        else {
        $totaal = $result1 + $result2;
        echo"$result1 plus $result2 is $totaal" ;}
break ;
case "-":
         if ((empty($result2)) and $result2 <> "0") {
    echo "U moet x en y invullen" ;    
        }
    else {     
    $totaal = $result1 - $result2;
        echo"$result1 min $result2 is $totaal" ; }
break ;
case "*":
         if ((empty($result2)) and $result2 <> "0") {
    echo "U moet x en y invullen" ;    
        }
        else{ 
    $totaal = $result1 * $result2;
        echo"$result1 keer $result2 is $totaal" ;
        }    
break ;
            case ":":
        if (empty($result2))  {
             echo "U moet x en y invullen en u mag niet door 0 delen" ;}
            
            else{
            if  ($result2 <> "0") {
                $totaal = $result1 / $result2;
        echo"$result1 gedeeld $result2 is $totaal" ; 
                   
        }
               else  { 
                   
             echo "u mag niet door 0 delen" ;   
        }
  
        }  
break ;        
case "kwadraat" ;
           if (is_numeric($result2)) {
               echo "U moet alleen  y invullen" ;    
        }
               else {
$totaal = pow($result1, 2) ;
        echo "het kwadraat van $result1 is $totaal" ; 
              }      
        break ;
case "wortel" ;
if (is_numeric($result2)) {
               echo "U moet alleen  y invullen" ;    
        }
else {        
$totaal = sqrt($result1) ; 
echo "de wortel van $result1 is $totaal" ;
    } 
break ; 
case  "tafel" ;
              if (is_numeric($result2)) {
               echo "U moet alleen  y invullen" ;    
        }
        else {
for($q=1;$q<=10;$q++) {        
$totaal = $result1* $q ;
echo "de tafel van $result1 keer $q is $totaal <br>" ; 

} 
            }
        break ;
case "macht" ;
          if ((empty($result2)) and $result2 <> "0") {
    echo "U moet x en y invullen" ;    
        }
        else {
$totaal = pow( $result1, $result2) ;
echo "het antwoord van de som is $totaal" ;  
            }
}
}
?>
</td>
</tr>
<br><br>
<tr>
<td>
<br>
<button type="submit" name="submit" value="submit"> berekenen </button>
<button type="ressubmitet" name="delete" value="submit"> delete </button>
    
</td>
</tr>         

</table> 
</form> 

<br> 

</main> 
      
</body> 
</html>