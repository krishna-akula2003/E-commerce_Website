<html>
    <body>
        <?php
        $bool=false;
        $a=5;
        $b=6;
        $res=match($a){
            1=> "eq to 1",
            2 => "eq to2 ",
            default => "none",
        };
        echo $res;
        if($a<$b && !$bool){
            echo "first";
        }
        //matching for data type
        $d=5;
        $x="5";
        if($d==$x){
            echo "same";
        }
        echo "<br>";
        //checking whether both are same and data type also
        $n=5;
        $z=5;
        if($z===$n){
            echo "same and they are of  same data type";
        }
        ?>
    </body>
</html>