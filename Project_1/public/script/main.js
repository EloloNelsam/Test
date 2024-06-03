import {validateForm} from "./functions.mjs";


const formArticle = document.getElementById("form-article");
const formCategorie = document.getElementById("form-categorie");
const formType = document.getElementById('form-type');

// console.log(formArticle, formCategorie, formType);
if (formCategorie) {
    formCategorie.addEventListener('submit', (e) => {
        e.preventDefault();
        validateForm(formArticle);

    })
}
if (formType) {
    formType.addEventListener('submit', (e) => {
        e.preventDefault();
        validateForm(formArticle);

    })
}

if (formArticle) {
    formArticle.addEventListener('submit', (e) => {
        e.preventDefault();
        validateForm(formArticle);

    })
}

