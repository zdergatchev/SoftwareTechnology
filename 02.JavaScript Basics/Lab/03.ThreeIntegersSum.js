'use strict';
solve(['8 15 7'])

function solve(args){
    let numbers = args[0].split().map(Number)
    let firstNumber = numbers[0];
    let secondNumber = numbers[1];
    let thirdNumber = numbers[2];
    function checkIfEqual(firstNumber, secondNumber, thirdNumber){
        if (firstNumber > secondNumber){
            let temp = firstNumber;
            firstNumber = secondNumber;
            secondNumber = temp;
        }

        if(firstNumber + secondNumber == thirdNumber){
            return firstNumber + " + " + secondNumber + " = " + thirdNumber;
        }
    }
}

    
