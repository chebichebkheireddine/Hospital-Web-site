/* Created by Tivotal */

const translations = {
  en: {
    home: 'Home',
    services: 'Services',
    doctors: 'Doctors',
    about: 'About',
    contact: 'Contact',
  },
  fr: {
    home: 'Accueil',
    services: 'Services',
    doctors: 'Médecins',
    about: 'À propos',
    contact: 'Contact',
  },
  ar: {
    home: 'الرئيسية',
    services: 'الخدمات',
    doctors: 'الأطباء',
    about: 'نبذة عنا',
    contact: 'اتصل بنا',
  },
};
const changeLanguage = (lang) => {
  const elements = document.querySelectorAll('[data-translate]');
  elements.forEach((el) => {
    const key = el.getAttribute('data-translate');
    el.textContent = translations[lang][key];
  });
};
const langBtn = document.querySelector('#lang-btn');
langBtn.addEventListener('click', () => {
  const lang = langBtn.getAttribute('data-lang');
  if (lang === 'en') {
    langBtn.setAttribute('data-lang', 'fr');
    changeLanguage('fr');
  } else if (lang === 'fr') {
    langBtn.setAttribute('data-lang', 'ar');
    changeLanguage('ar');
  } else {
    langBtn.setAttribute('data-lang', 'en');
    changeLanguage('en');
  }
});

const inputs = document.querySelectorAll(".input");

function focusFunc(){
    let parent = this.parentNode;
    parent.classList.add("focus");
}

function blurFunc(){
    let parent = this.parentNode;
    if(this.value == ""){
        parent.classList.remove("focus");
    }
   
}

inputs.forEach((input) =>{
    input.addEventListener("focus", focusFunc);

    input.addEventListener("blur", blurFunc);
})

/*faq*/
const items = document.querySelectorAll('.accordion button');
function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}
items.forEach((item) => item.addEventListener('click', toggleAccordion));

/*login*/
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
