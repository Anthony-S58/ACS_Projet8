let star = document.getElementById('star');

star.addEventListener('click', function() {

if (star==0) {
    star.setAttribute("src","IMG/star.png");

}

else {
    star.setAttribute("src","IMG/star2.png");
}

});

let contact = document.getElementById('contacter');
let form = document.getElementById('form_contact');

contact.addEventListener('click', function(){

    form.setAttribute("style", "display:block");
    contact.setAttribute("style", "display:none");
});


let send = document.getElementById('contact_submit');
send.addEventListener('click', function(){
    
    alert('Votre message a bien été envoyé');  
})
