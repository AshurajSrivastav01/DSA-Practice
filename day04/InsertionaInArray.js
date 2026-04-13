let arr = [1, 2, 3, 4, 5];
let element = 10;
let position = 2;
let newArr = [];

for (let i = arr.length - 1; i >= 0; i--) {
    if (i >= position){
        arr[i + 1] = arr[i];
    }
}
arr[position] = element;
console.log(arr);