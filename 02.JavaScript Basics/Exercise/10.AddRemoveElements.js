'use strict';
actions(['add 3', 'add 5', 'add 7']);
//actions(['add 3', 'add 5', 'remove 1', 'add 2']);
//actions(['add 3', 'add 5', 'remove 2', 'remove 0', 'add 7']);

function actions(num) {
    let numbers = [];
    for (let i = 0; i < num.length; i++) {
        let input = num[i].split(' ');
        let command = input[0];
        let value = Number(input[1]);

        if (command === 'add') {
            numbers.push(value);
        }
        else {
            numbers.splice(value, 1);
        }
    }
    
    for (var number in numbers) {
        console.log(numbers[number])
    }
}