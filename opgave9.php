<!DOCTYPE html>
<html>
<body>
    

    
<?php
    if (isset ( $_POST['submit']  ) ) { 
$getal_nieuw=1;
$getal = $_POST['faculteit'];
   
for($q=1;$q<=$getal;$q++){
$eind=$getal_nieuw*$q;
$getal_nieuw=$eind;
}
echo "Het antwoord van de faculteit van $getal is $eind" ;
    }
?> 
    <form action="opgave9.php" method="post">
Getal: <input type="number" min="1" max= "100" name="faculteit"><br><br>
<button type = "submit" name = "submit"> Verzenden</button><br><br>
        
</body>
</html>