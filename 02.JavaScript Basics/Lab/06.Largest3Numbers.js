'use strict';
largest3Numbers(['10','30','15','20','50','5']);

function largest3Numbers(arr) {
    let nums = arr.map(Number);
    let numsSorted = nums.sort((a, b) => b - a);
    let count = Math.min(3, arr.length);
    for (let i = 0; i < count; i++)
        console.log(numsSorted[i]);
}
