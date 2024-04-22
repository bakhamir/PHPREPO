<?php
interface OperationInterface {
    public function calculate($operand1, $operand2);
}
 
class Addition implements OperationInterface {
    public function calculate($operand1, $operand2) {
        return $operand1 + $operand2;
    }
}

class Subtraction implements OperationInterface {
    public function calculate($operand1, $operand2) {
        return $operand1 - $operand2;
    }
}

class Multiplication implements OperationInterface {
    public function calculate($operand1, $operand2) {
        return $operand1 * $operand2;
    }
}

class Division implements OperationInterface {
    public function calculate($operand1, $operand2) {
        if ($operand2 == 0) {
            throw new Exception("Division by zero!");
        }
        return $operand1 / $operand2;
    }
}
class Factorial implements OperationInterface{
    public function calculate($operand1, $operand2) {
        $factorial = 1;
        $factorial1 = 1;
        for ($x=$operand1; $x>=1; $x--)
        {
        $factorial = $factorial * $x;
        }

        return $factorial;
    }
}


class OperationFactory {
    public function createAdditionOperation(): OperationInterface {
        return new Addition();
    }

    public function createSubtractionOperation(): OperationInterface {
        return new Subtraction();
    }

    public function createMultiplicationOperation(): OperationInterface {
        return new Multiplication();
    }

    public function createDivisionOperation(): OperationInterface {
        return new Division();
    }
    public function createFactorialOperation(): OperationInterface{
        return new Factorial();
    }
}

class Calculator {
    private $operationFactory;

    public function __construct(OperationFactory $operationFactory) {
        $this->operationFactory = $operationFactory;
    } 

    public function calculate($operationType, $operand1, $operand2) {
        switch ($operationType) {
            case "+":
                $operation = $this->operationFactory->createAdditionOperation();
                break;
            case "-":
                $operation = $this->operationFactory->createSubtractionOperation();
                break;
            case "*":
                $operation = $this->operationFactory->createMultiplicationOperation();
                break;
            case "/":
                $operation = $this->operationFactory->createDivisionOperation();
                break;
            case "!":
                $operation = $this->operationFactory->createFactorialOperation();
            default:
                // throw new Exception("Invalid operation type!");
                echo "";
        }
        return $operation->calculate($operand1, $operand2);
    }
}
?>