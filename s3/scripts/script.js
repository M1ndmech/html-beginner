"use strict";

// const - фиксированное значение, let - для функции
// alt + z - перенос на следующую строку в VSC

// const firstNum = Number.parseFloat(prompt('Введите число 1'));
// console.log(firstNum);

// const secondNum = +prompt('Введите число 2');
// console.log(secondNum);

// function sum(first, second) {
//     const result = first + second;
//     return result;
// }

// alert(`Сумма чисел ${firstNum} и ${secondNum} равна ${sum(firstNum, secondNum)}`);

// Задача 4: вывести на экран в диалоговом окне текст с сообщением “Вам хорошо живется?”и кнопками «ОК», «Отмена», для чего необходимо использовать confirm.- При нажатии на кнопку “ОК” вывести в диалоговом окне текст с сообщением “Тогда мы идем к вам!”.- При нажатии на кнопку “Отмена” вывести в диалоговом окне текст с сообщением “Ну вы держитесь там!”.

// const askState = confirm ("Вам хорошо живётся?");

// if (askState) {
//     alert("Тогда мы идём к вам!");
// } else {
//     alert("Ну вы держитесь там!");
// }

// let product = "Бананы";
 
// if (product == "Мандарины") {
//   alert('Мандарины стоят 100 руб/кг.');
// } else if (product == "Бананы") {
//   alert('Бананы и груши стоят 70 руб/кг.');
// } else if (product == "Груши") {
//   alert('Бананы и груши стоят 70 руб/кг.');
// } else {
//   alert('Нет такого продукта.');
// }

const product = "Бананы";
 
switch (product) {
    case "Мандарины":
        alert('Мандарины стоят 100 руб/кг.');
        break;
    case "Бананы":
    case "Груши":
        alert('Бананы и груши стоят 70 руб/кг.');
        break;
    default:
        alert('Нет такого продукта.');
        break;
}