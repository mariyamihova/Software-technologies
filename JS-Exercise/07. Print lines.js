function printLines(arr){
    for(let line of arr){
        if(line=="Stop"){
            return;
        }else{
            console.log(line);
        }
    }
}
//printLines([
   //  '3',
    //'6',
   //'5',
    //'Stop',
//'10',
//'12']);