 
<?php

include 'Calculator.php';
// echo "hello world!";
$array = array(1,2,3,4);
// try{ 
// echo $array[1] / 0;
// throw new Exception("Division by zero");
// }
// catch(Exception $e){
//     echo "Поймана ошибка", $e->getMessage();
// }

// try {
//     echo 5 / 0;
//   } catch(InvalidArgumentException $ex) {
//     echo $ex->getMessage();
//   }
//   finally{
//     echo "wut";
//   }

// try {
//     echo 5 / 0;
// }
// catch(Throwable $ex) {
//     print "error";
// }



$operationFactory = new OperationFactory();
$calculator = new Calculator($operationFactory);

// echo "[--------------------------------]\n";
// echo "          enter action\n";
// $action = htmlspecialchars($_GET["action"]);
// echo "IF U CHOOSE FACTORIAL NUM2 IS USELESS";
// echo "          enter first number\n";
// $firstNum = ($_GET["first"]);
// echo "          enter second number\n";
// $secondNum = ($_GET["second"]);

// echo "[--------------------------------]\n";
// echo "          RESULT\n";
// echo $calculator->calculate($action,$firstNum,$secondNum)

echo ($_GET["second"]);
?>





