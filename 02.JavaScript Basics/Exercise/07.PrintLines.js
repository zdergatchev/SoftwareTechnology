'use strict';
print(['line1', 'line2', 'Stop', 'line3']);

function print(num){
    for(let i = 0; i < num.length; i++){
        if(num[i] == 'Stop') {
            break;
        }
        else {
            console.log(num[i]);
        }
    }
}