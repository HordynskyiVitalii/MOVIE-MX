// document.addEventListener('DOMContentLoaded', () => {
//     const modal = document.querySelector('.modal');
//     const btnOpenModal = document.getElementById('openModalBtn');
//     const btnCloseModal = document.getElementById('modalCloseBtn');
    
//     const openModal = () => {
//         modal.style.display = 'block';
//     };
    
//     const closeModal = () => {
//         modal.style.display = 'none';
//         changeLanguage();
//     };
    
//     btnOpenModal.addEventListener('click', openModal);
//     btnCloseModal.addEventListener('click', closeModal);

//     const modalLangItems = document.querySelectorAll('.modal-lang');
//     let selectedLang = ''; 

//     modalLangItems.forEach((item) => {
//         item.addEventListener('click', () => {
//             selectedLang = item.textContent; // Отримати текст елементу, а не атрибут
//             closeModal();
//         });
//     });
//     function changeLanguage() {
//         // Встановити атрибут lang на тегу <html>
//         document.documentElement.lang = selectedLang;
//         console.log(`Selected language: ${selectedLang}`);
//         // Тут ви також можете викликати інші функції для зміни контенту на сторінці залежно від обраної мови
//     }
    
//     // Приклад виклику функції changeLanguage
//     changeLanguage();
    
// });


    

