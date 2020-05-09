
const nameInput = document.querySelector('[name="name"]'),
    emailInput = document.querySelector('[name="email"]'),
    phoneInput = document.querySelector('[name="phone"]'),
    msgArea = document.querySelector('[name="message"]'),
    btn = document.querySelector('.btn'),
    form = document.querySelector('form');
const inputs = document.querySelectorAll('input');

form.addEventListener('submit', (event) => {
    // event.preventDefault();
// //     console.log('kjjkk')
// //     inputs.forEach(item => {
// //         if(item.value === '' || msgArea.value === '' || item.classList.contains('invalid') || msgArea.classList.contains('invalid')){
// //             console.log(item.value.length)
// //             showErrorMsg(event, 'Все поля должны быть заполнены');
// //         }else{
// //             delErrorMsg(event);
// //         }
// //     })
    // fetch(`./script/send.php`)
    // .then((result) => result.json())
    // .then((data) => console.log(data))
    // $.post( "./script/send.php", function( data ) {
    //     // $( ".result" ).html( data );
    //     console.log(data)
    //   });
})

// ///// Удаляет поле с ошибкой
// let delErrorMsg = (event) => {
//     console.log('func del')
//     target = event.target;
//     target.classList.remove('invalid');
//     target.classList.add('isCheck');
//     if (target.value === '' || event.target.classList.contains('isCheck')) {
//         let inputWrap = target.parentElement;
//         let error = inputWrap.querySelectorAll('.error');
//         error.forEach(item => {
//             item.remove(inputWrap)
//         });
//     }
// }

// ///// Формирует вывод ошибки
// let showErrorMsg = (event, error) => {
//     console.log(error)
//     let errorMsg = error;
//     console.log(errorMsg)
//     let target = event.target;
//     target.classList.remove('isCheck');
//     target.classList.add('invalid');
//     let inputWrap = target.parentElement;
//     let div = inputWrap.querySelector('.error');
//     console.log(div)
//     if (!inputWrap.querySelector('.error')) {
//     //     let div = document.createElement('div');
//     // div.className = 'error';
//         div.innerHTML = errorMsg;
//         // target.after(div);
//     }else{
//         // let div = inputWrap.querySelector('.error')
//         div.innerHTML = errorMsg; 
//         // target.after(div);

//     }
//     target.after(div);

// }

// /////Проверка поля имени
// // let chackOnLetter = (name) => {
// //     let arr = [];
// //     name.split('').forEach(item => {
// //         // arr.push(parseInt(item));
// //         if(!isNaN(parseInt(item))){
// //             return 1;
// //         }
// //     })
// // }

// let checkValidInputName = (event, name) => {
//     name = name.value;
//     name = name.trim();
//     if (name.length !== 0 && name.length < 2 || name.length > 20) {
//         showErrorMsg(event, 'Введите корректное имя!');
//     }else if(name.match(/\d/)){
//         showErrorMsg(event, 'Имя не может содержать цыфры');
//     }else {
//         delErrorMsg(event);
//     }
// }
// nameInput.addEventListener('change', (event) => {
//     checkValidInputName(event, nameInput);
// })



// //////Проверка поля емаил
// let checkValidInputEmail = (event, email) => {
//     console.log(event)
//     email = email.value;
//     email = email.trim();
//     if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
//         showErrorMsg(event, 'Поле должно содержать @ и .');
//     } else {
//         delErrorMsg(event);
//     }
// }
// emailInput.addEventListener('change', (event) => {
//     checkValidInputEmail(event, emailInput);
// })



// ////Проверка поля телефон
// let checkValidInputPhone = (event, phone) => {
//     // phone = phone.value;
//     // phone = phone.trim();
//     let regexp = /[\.;":'a-zA-Zа-яА-Я]/;
//     // let regexp = /\d/g;
//     if (phone.value.match(regexp)) {
//         phone.value = '';
//         showErrorMsg(event, 'Номер не должен содержать букв');
//     }else if(phone.value.length !== 12){
//         showErrorMsg(event, 'Введите корректный номер');
//     }else {
//         // phone.value = phone.value.match(regexp).join('');
//         delErrorMsg(event);
//     }
// }
// phoneInput.addEventListener('input', (event) => {
//     checkValidInputPhone(event, phoneInput);
// })


// ////Проверка поля msg
// let checkValidInputMsg = (event, msg) => {
//     msg = msg.value;
//     msg = msg.trim();
//     console.log(msg)
//     if (msg.length < 25 && msg.length !== 0) {
//         showErrorMsg(event, 'Опишите проблему максимально развернуто');
//     } else {
//         delErrorMsg(event);
//     }
// }
// msgArea.addEventListener('input', (event) => {
//     checkValidInputMsg(event, msgArea);
// })

