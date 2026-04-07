console.log('Bubble Sorting');

let arr = [5, 1, 4, 2, 8];

for(let i=0; i <arr.length; i++) {
    for (let j = 0; j <arr.length-1; j++) {
        if(arr[j] > arr[j+1]){
            // Sawping
            let temp = arr[j];
            arr[j] = arr[j+1];
            arr[j+1] = temp;
        }

    }
}
console.log(arr);