function MultipleValues(arr) {
    let newArray=[];
    for(let i=0;i<arr.length-1;i++){
        let data=arr[i].split(' ');

        let keyName=data[0];
        let valueName=data[1];
        if(!(keyName in newArray)){
            newArray[keyName]=[];
        }
        newArray[keyName].push(valueName);
    }
    let toBePrinted=arr[arr.length-1];

        if(toBePrinted in newArray ){
            console.log(newArray[toBePrinted].join("\n"));
        }else{
            console.log("None");
        }

}
MultipleValues(['key value', 'key eulav', 'test tset','key']);
MultipleValues(['3 bla','3 alb',2]);