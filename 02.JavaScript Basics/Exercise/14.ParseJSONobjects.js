'use strict';
data(['{"name":"Gosho","age":"10","date":"19/06/2005"}',
    '{"name":"Tosho","age":"11","date":"04/04/2005"}']);

function input(incomingData) {
    let persons=[]
    for(let i = 0; i < incomingData.length;i++){
        let obj = JSON.parse(incomingData[i])
        persons.push(obj)
        console.log('Name: '+persons[i].name)
        console.log('Age: '+persons[i].age)
        console.log('Date: '+persons[i].date)
    }
}
