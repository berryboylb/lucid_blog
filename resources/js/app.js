//require('./bootstrap');
//login dropDown
const dropDown = document.querySelector('#dropDown');
const dropDownContent = document.querySelector('.dropdown-content');

const myFunction = () => {
   dropDown.addEventListener('click', ()=>{
   console.log('hi');
   dropDownContent.classList.toggle('activate-dropdown');
});
}

myFunction();


