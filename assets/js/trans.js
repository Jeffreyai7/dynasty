// script.js
// document.addEventListener('DOMContentLoaded', () => {
//     const sections = document.querySelectorAll('.trans');
  
//     const observerOptions = {
//       threshold: 0.1 // Trigger when 10% of the section is in view
//     };
  
//     const observer = new IntersectionObserver((entries, observer) => {
//       entries.forEach(entry => {
//         if (entry.isIntersecting) {
//           entry.target.classList.add('visible');
//           observer.unobserve(entry.target); // Stop observing once it's visible
//         }
//       });
//     }, observerOptions);
  
//     sections.forEach(section => observer.observe(section));
//   });
  