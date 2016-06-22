'use strict';
//input(['key value','key eulav','test tset','key'])
//input(['3 bla','3 alb','2 '])
input(['3 test','3 test1','4 test2','4 test3','4 test5','4'])

function input(incomingData){
    let index = incomingData[incomingData.length-1]
    let isContain = false
    for(let i =0; i<incomingData.length-1;i++){
        let pair = incomingData[i].split(' ')
        let key = pair[0]
        let value = pair[1]
        if (index == key) {
            console.log(value)
            isContain = true
        }
    }
    if(isContain == false){
        console.log('None')
    }
}
