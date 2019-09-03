<html>
    <head> 
    <title> bolberekenen</title> 
           </head>
    <body>
<?php 
$r= 0 ;
        $r=$_POST[ "straal"] ;
$inhoudbol= (4/3) * pi()*pow($r, 3) ;
echo "de inhoud van de bol is: $inhoudbol" ; 
        ?>
        <form method="post" action=""> 
            <input type="number" step="0.1" name="straal"> 
            <input type="submit" value= "verzenden">  </form>
    </body>
</html>