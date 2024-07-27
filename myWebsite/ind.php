<html>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="number" name="num1" required>
    <select 
     name="oprator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="divide">/</option>
        <option value="multiply">*</option>
    </select>
    <input type="number" name="num2" required>
    <button>calclulate</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //grab data from the input
    $num11=filter_input(INPUT_POST,"num1",FILTER_SANITIZE_NUMBER_FLOAT);
    $num2=filter_input(INPUT_POST,"num2",FILTER_SANITIZE_NUMBER_FLOAT);
    $num1=filter_input(INPUT_POST,"num1",FILTER_SANITIZE_NUMBER_FLOAT);
    $operator=htmlspecialchars($_POST["oprator"]);
    $e=false;
    if(empty($num11) || empty($num2) || empty($operator)){
        echo "fill all fields";
        $e=true;
    }
    if(!$e){
        $value=0;
        switch($operator)
        {
            case "add":
                $value=$num11+$num2;
                break;
            case "subtract":
                $value=$num11-$num2;
                break;
            case "multiply":
                $value=$num11*$num2;
                break;
            case "divide":
                $value=$num11/$num2;
                break;
            default:
                echo "error";
    }
    echo "result=$value";
}
}
?>
</body>
</html>