
'use strict';
printNumbers([2, 3, -1]);

function printNumbers(num){
    let X = num[0];
    let Y = num[1];
    let Z = num[2];
    let count = 0;
    for (let i = 0; i <= num.length; i++){
        if(num[i] < 0){
            count++;
        }
    }
    if(count % 2 == 0){
        console.log("Positive");
    }
    else{
        console.log("Negative");
    }
}