function calcSumsByTown(arr) {
    let objects = arr.map(JSON.parse);

    let sums = {};

    for (let obj of objects) {
        if (!(obj.town in sums)) {
            sums[obj.town] = 0;
        }
        sums[obj.town] += obj.income;

    }
    let towns = Object.keys(sums).sort();
    for (let town of towns) {
        console.log(`${town} -> ${sums[town]}`);
    }
}

 //calcSumsByTown([
//'{"town":"Sofia","income":250}',
//'{"town":"Varna","income":120}',
// '{"town":"Pleven","income":30}',
 //'{"town":"Sofia","income":70}']);