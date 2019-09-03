<html>
<body>
    
    <?php
     if (isset ( $_POST['submit']  ) ) { 
    $getalnieuw=1 ;
    $getalvorige=0;
    $aantal= $_POST['Fibonacci'] ;
         
    print("0, 1");
for($q=1;$q<$aantal;$q++){
$eind=$getalnieuw+$getalvorige;
$getalvorige=$getalnieuw;
$getalnieuw=$eind;
print(", $eind"); 
   
   
     }
     } 
     ?>
    
    <form method="post" action="opgave8.php"> 
   Getal: <input type="number" min="1" max="100" name="Fibonacci">
        <button type="submit" name="submit"> Verzenden</button>   
</form>  
</body>
</html>