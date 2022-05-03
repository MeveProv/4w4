(function(){

    let boite__modale = document.querySelector('.boite__modale');
    let boite__modale__ferme = document.querySelector('.boite__modale__ferme');
    let boite__modale__texte = document.querySelector('.boite__modale__texte');
    let galerie__img = document.querySelectorAll('.galerie img')
    console.log(galerie__img.length);
    let elmImg = document.createElement('img');
    boite__modale__texte.appendChild(elmImg);

    
    for (const img of galerie__img) {
        img.addEventListener('mousedown', function () {
            console.log(this.tagName);
            boite__modale.classList.add('boite__modale__ouvrir')

            //boite__modale.classList.remove('boite__modale__ouvrir') 
            //boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
            console.log(this.getAttribute('src'))
            elmImg.setAttribute('src', this.getAttribute('src'))
        })
    }
    boite__modale__ferme.addEventListener('mousedown', function () {
        boite__modale.classList.remove('boite__modale__ouvrir')
    })
})()