// ********************* Method 1 for importing variables form another JS file ****************************
let msg = "Hello World!";
const PI = 3.14;

function addNumbers(a, b){
    return a + b;
}
// Exporting variables and functions
export { msg, PI, addNumbers };

// ********************* Method 2 for importing variables form another JS file ****************************
// // Defining variables
// var str = "Hi there!";
// var num = 15;
//
// // Defining a function
// function multiplyNumbers(a, b){
//     return a * b;
// }
