require('./bootstrap');



$(document).ready(function () {
  console.log('ciao');
});

// ********************* Method 1 for importing variables form another JS file ****************************
import { msg, PI, addNumbers } from './partials/ajax-prova.js';

console.log(msg); // Prints: Hello World!
console.log(PI); // Prints: 3.14
console.log(addNumbers(5, 16)); // Prints: 21

// ********************* Method 2 for importing variables form another JS file ****************************


//    var url = "./resources/js/laravel-prova.js";
//
//    $.getScript(url, function(){
//      $(document).ready(function(){
//        console.log(str); // Prints: Hi there!
//        console.log(num); // Prints: 15
//        console.log(multiplyNumbers(4, 25)); // Prints: 100
//      });
//    });
// // issue of cacheing , didnt understand very well
