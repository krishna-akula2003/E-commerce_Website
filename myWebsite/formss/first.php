<html>
<body>
    <?php 
    $sss="metta";
    $r="7";
    echo $r.$sss;
    echo "<br>";
    // understanding global values
    $r=6;
    $t=78;
    function test(){
        global $r,$t;
        $t=$r+$t;
    }
    test();//  use the function for printing  updated values in next line 
    echo $t;
    echo "<br>";
    //if we donot use function before printing
    function sai(){
        global $r,$t;
        $r=$r+$t;
    }
    echo $r;// here the  updated value of r  did not print 
    echo "<br>";
    $y=5;
    $u=8;
    echo $y + $u;
    //for knowing data types 
     echo "<br>";
     $E=5.67;
     var_dump($E);
     echo "<br>";
     //array in php
     $err=array("SAI","OOO","ttt");
     var_dump($err);
     ?>
     //
</body>