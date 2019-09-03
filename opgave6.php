<html>
<body>
<?php 
    if(isset($_POST ['submit'] )) { 
    if(isset($_POST['graden'])) ;
    $graden = $_POST['graden'];
    $tempratuur = $_POST['tempratuur'] ;
        if ($graden== 1)  {
        $antwoord = ( $tempratuur*1.8+32) ;
        }
    else { 
    $antwoord = (($tempratuur-32)/1.8) ; 
    }
    
        echo"het antwoord is $antwoord" ;
    }
            
    
    
    
    
    
    ?>
    
    <form method="post" action="opgave6.php">
        <input type="number" name="tempratuur"> 
        
   <label for="graden1"> graden </label><input type="radio" id="graden1" name="graden" value="1"> 
 <label for="graden2"> fahrenheit </label><input type="radio" id="graden2" name="graden" value="2"> 
        <button type="submit" name="submit"> verzenden</button>
    </form>

</body>
</html> 
