'use strict';
printNumbers([10, 15, 20]);

function printNumbers(num){
    let range = num.length;
    for (let i = range - 1; i >= 0; i--)
        console.log(num[i])
}