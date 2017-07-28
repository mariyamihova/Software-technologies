function workingWithKVP(arr) {
    let newArray=[];
    for(let i=0;i<arr.length-1;i++){
        let data=arr[i].split(' ');

            let key=data[0];
            let value=data[1];
            newArray[key]=value;


    }
    let keyName=arr[arr.length-1];
    if(newArray[keyName]==undefined){
        console.log("None");
    }
    else{
        console.log(newArray[keyName]);
    }


}
workingWithKVP([
 'key value',
    'key eulav',
   'test tset',
'key']);