<html>
    <head> 
    <title> bolberekenen</title> 
           </head>
    <body>
<?php 
if(isset($_POST['submit' ])) {
        $r=$_POST[ 'straal'] ;
    $inhoudbol= (4/3) * pi()*pow($r, 3) ;
    echo "de inhoud van de bol is: $inhoudbol" ; 
 }    ?>
        <form method="post" action="opgave1.php"> 
            <input type="number" placeholder="voer de straal in" step="0.1" name="straal"> 
            <input type="submit" name="submit" value= "verzenden">  </form>
    </body>
</html>