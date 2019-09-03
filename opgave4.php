<html>
    <body> 

<?php 
        if(isset($_POST['submit'])) {
$basisbedrag= $_POST['basisbedrag'] ;
$rente=  $_POST ['rentepercentage'] ;
$jaar=  $_POST ['jaar'] ;
 
for($q=0;$q<=$jaar;$q++){            
$totaalbedrag=$basisbedrag* pow(1+ ($rente/100), $q) ;
echo "het aantal jaar is $q en totaalbedrag is $totaalbedrag <br>" ;
}
        echo "het basisbedrag is $basisbedrag" ;
        echo "<br>" ;
        echo "het renterpercentage is $rente" ;
        echo "<br>";
     
        echo "<br>" ;
       
        
        }
            
            
    
    ?>
        <form method="post" action="opgave4.php"> 
        <input type="number" placeholder="vul hier uw basisbedrag in" name="basisbedrag"> <br> <br> 
            <input type="number" placeholder="voer hier uw rentepercentage in" step="0.01" name="rentepercentage"> <br> <br>
            <input type="number" placeholder="aantal jaar" name="jaar">
            <button type="submit" name="submit"> verzenden</button>
        </form>
        </body>
    </html>