let star = document.getElementById('star');

star.addEventListener('click', function() {

if (star==0) {
    // si la div vaut 0 alors on ajoute la class toggle
    star.setAttribute("src","IMG/star.png");

}

else {
    // sinon elle vaut 1 alors on retire la class toggle
    star.setAttribute("src","IMG/star2.png");
}

});

let contact = document.getElementById('contacter');
let form = document.getElementById('form_contact');

contact.addEventListener('click', function(){

    form.setAttribute("style", "display:block");
});
