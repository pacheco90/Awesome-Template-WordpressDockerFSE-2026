import '../sass/styles.scss';
import 'slick-carousel/slick/slick.js';
import 'dropkickjs/dist/dropkick.js';
import AOS from 'aos/dist/aos.js';
import jarallax from 'jarallax/dist/jarallax.js';

const navigator = document.querySelector("nav");
const navbtn = document.querySelector('.nav-btn');
const close = document.querySelector(".close-menu"); 
const out = document.querySelector("main");

navbtn.addEventListener("click", function(){
    navigator.classList.add('show');
});

close.addEventListener("click", function(){
    navigator.classList.remove('show');
});

out.addEventListener("click", function(){
    navigator.classList.remove('show');
});


const header = document.querySelector("header");

window.addEventListener('scroll', () => (window.scrollY > 200) ? header.classList.add('reduce_header') :  header.classList.remove('reduce_header')  );

window.addEventListener('resize', function(){
    document.querySelector("nav").classList.remove('show');
});


let segundoNivel = document.querySelectorAll("header nav ul li ul li");

segundoNivel.forEach(item => {

  item.addEventListener("click", function(e){

    // ✅ Si el click viene de un <a>, lo dejamos pasar
    if(e.target.tagName === "A") return;

    let tercerNivel = item.querySelector(":scope > ul");

    if(!tercerNivel) return;

    e.preventDefault();

    segundoNivel.forEach(li => {
      let sub = li.querySelector(":scope > ul");
      if(sub && li !== item){
        sub.classList.remove("open");
      }
    });

    tercerNivel.classList.toggle("open");

  });

});

AOS.init({
    once: true,
});

jarallax(document.querySelectorAll('[data-jarallax]'));