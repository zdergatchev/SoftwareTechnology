'use strict';
numbers(["3", "0 - 5", "1 – 6", "2 – 7", "3 – 9"]);

function numbers(num){
    let count = Number(num[0]);
    let numbers = [];

    for (let i = 1; i < num.length; i++) {
        let pair = num[i].split(' ');
        let index = Number(pair[0]);
        let value = Number(pair[2]);

        numbers[index] = value;
    }

    for (let j = 0; j < count; j++) {
        if (j in numbers)
            console.log(numbers[j]);
        else {
            console.log(0);
        }
    }
}