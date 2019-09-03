<html> 
<body>
<?php
    if (isset ( $_POST['submit']  ) ) { 
    $letter =  $_POST['letter'] ;
    $tekst =  $_POST['text'] ;
    $antwoord= substr_count ( $tekst, $letter) ;
    $antwoord2= strlen ( $tekst) ; 
    echo "het aantal letters van de tekst is $antwoord2" ; 
    echo "<br>" ;
    echo "de tekst is $tekst" ;
    echo "<br>" ;
    echo "de letter $letter die uw zocht is $antwoord voorgekomen" ;
        
    
    
    }
    

    
    
    
    
?>
   <form method="post" action="opgave5.php"> 
       <textarea name="text" placeholder="vul hier een text in">  </textarea> <br>
       Welke letter zoekt u; <input type= "text" name="letter"> <br>
       <button type="submit" name="submit"> submit</button>
                 
        
    </body>
</html> 