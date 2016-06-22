'use strict';
data(["name -> Angel", "surname -> Georgiev", "age -> 20", "grade -> 6.00", "date -> 23/05/1995", "town -> Sofia"]);

function data(elements) {
    let object = {};
    for (let i = 0; i < elements.length; i++) {
        let element = elements[i].split(" -> ");
        let key = element[0];
        let value = element[1];
        if (!isNaN(value)) {
            value = Number(value);
        }
        object[key] = value;
    }
    let toString = JSON.stringify(object);
    console.log(toString);
}
