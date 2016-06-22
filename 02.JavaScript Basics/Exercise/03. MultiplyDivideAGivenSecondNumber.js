
'use strict';
operations([3, 2]);

function operations(num){
    let N = num[0];
    let X = num[1];
    let result = 0;
    if (X >= N) {
         result = N * X;
    }
    else {
         result = N / X;
    }
    console.log(result);
}