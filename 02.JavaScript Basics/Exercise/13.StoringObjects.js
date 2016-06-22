'use strict';
data(['Pesho -> 13 -> 6.00','Ivan -> 12 -> 5.57','Toni -> 13 -> 4.90']);
//https://www.ntu.edu.sg/home/ehchua/programming/webprogramming/JavaScript_Introduction.html

function data(incomingData) {
    let students=[]
    for(let i = 0; i < incomingData.length;i++){
        let input = incomingData[i].split(' -> ')
        let name = input[0]
        let age = input[1]
        let grade = input[2]
        let student = {Name:name, Age:age, Grade:grade};
        students.push(student)

        console.log('Name: '+ students[i].Name)
        console.log('Age: '+ students[i].Age)
        console.log('Grade: '+ students[i].Grade)
    }
}
