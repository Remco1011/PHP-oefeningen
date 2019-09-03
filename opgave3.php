<html>
    <body> 
        <head> 
        <title> opgave 3 </title>
        </head>
<?php
        if(isset ($_POST ['submit'])) { 
$aantalkaarten= $_POST['tot'] ;
$hoog= 7.75 ;    
$med= 6.75 ;
$laag= 5.75 ;
       
            If ( $aantalkaarten <= 3 ) { $totalpr= $aantalkaarten* $hoog ;} 
            else if    ( $aantalkaarten<= 5) { $totalpr=(3*$hoog) + ($aantalkaarten -3)*$med;}
            else  { $totalpr=(3*$hoog)+ (2*$med) + (($aantalkaarten -5)* $laag);}
            
              
        echo " er zijn $aantalkaarten kaarten en de totale prijs van de kaartjes is $totalpr";
       
            }
            
                    
?>
     <form method="post" action="opgave3.php"> 
            <input type="number" placeholder="voer hier uw aantalkaarten in" step="1" name="tot"> 
         <button type="submit" name="submit" value= "verzenden"> verzenden </button>  </form>   
    
    </body>
    </html>


