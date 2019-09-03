<!DOCTYPE html>
<html>
<body>
    


    <form action="opgave10.php" method="post">
Getal: <input type="number" min="1" max= "100" name="kwadraat"><br><br>
<button type = "submit" name = "submit"> Verzenden</button><br><br>
            
<?php
if (isset($_POST['submit'])) {   
$getal_nieuw=0;
$getal = $_POST['kwadraat'];
   
for($q=1;$q<=$getal;$q++){
$getal_nieuw= $getal_nieuw + pow($q, 2);
}

echo "het antwoord is $getal_nieuw" ;       
}
?> 
</body>
</html>