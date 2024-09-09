
// document.addEventListener('DOMContentLoaded', function () {
//     const slides = document.querySelector('.slides');
//     const slideElements = document.querySelectorAll('.slide');
//     const totalSlides = slideElements.length;
//     let currentIndex = 0;

//     function showSlide(index) {
//         const offset = -index * 100;
//         slides.style.transform = `translateX(${offset}%)`;
//     }

//     document.querySelector('.next').addEventListener('click', function () {
//         currentIndex = (currentIndex + 1) % totalSlides;
//         showSlide(currentIndex);
//     });

//     document.querySelector('.prev').addEventListener('click', function () {
//         currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
//         showSlide(currentIndex);
//     });

//     // Optional: Auto-slide every 3 seconds
//     setInterval(function () {
//         currentIndex = (currentIndex + 2) % totalSlides;
//         showSlide(currentIndex);
//     }, 5000);
// });
