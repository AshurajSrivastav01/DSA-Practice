let array = [1, 2, 6, 9, 5, 3, 7, 8, 4];

// step 01: Do Sorting in  Ascending order
for (let i = 0; i < array.length; i++) {
    for (let j = 0; j < array.length - 1; j++) {
        // Swapping
        if(array[j] > array[j + 1]) {
            let temp = array[j];
            array[j] = array[j + 1];
            array[j + 1] = temp;
        }
    }
}
console.log("Sorted Array: ", array);

//step 02: Get the 2nd Largest Number
let secandLargestNumber = array[array.length - 2];
console.log("Secand Largest Number: ", secandLargestNumber);
