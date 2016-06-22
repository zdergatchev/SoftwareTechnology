'use strict';
printNumbers([5]);

function printNumbers(num){
    let range = num[0];
    for (let i = range; i >= 1; i--)
        console.log(i)
}