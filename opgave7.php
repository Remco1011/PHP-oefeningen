<html> 
<body>
    <?php 
    if (isset($_POST ['submit'])) { 
    $gewicht = $_POST['gewicht'] ;
        
    if($gewicht > 23) { 
    $antwoord = (ceil($gewicht - 80)) *37.50 ;
    echo "u moet zoveel bij betalen $antwoord" ;    
    
    }
    else { 
    echo"u hoeft niks bij te betalen" ;
    }
    
    }
    ?>

    
    
    
    
 <form method="post" action= "opgave7.php">
    gewicht van u koffer <input type="number" name="gewicht" step="0.1">
     <button type="submit" name="submit"> verzenden </button>
                                 </form>
    </body>
</html>