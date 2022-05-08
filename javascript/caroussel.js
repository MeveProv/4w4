(function(){

    let boite__caroussel = document.querySelector('.boite__caroussel');
    let boite__caroussel__ferme = document.querySelector('.boite__caroussel__ferme');
    let boite__caroussel__navigation = document.querySelector('.boite__caroussel__navigation');
    let galerie__img = document.querySelectorAll('.galerie img')
    console.log(galerie__img.length);
    let elmImg = document.createElement('img');
    boite__caroussel.append(elmImg);

    
    for (const img of galerie__img) {
        console.log(this.tagName);
        img.addEventListener('mousedown', function () {
          
            boite__caroussel.classList.add('boite__caroussel__ouvrir')

            console.log(boite__caroussel.classList);
            //boite__modale.classList.remove('boite__modale__ouvrir') 
            //boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
            console.log(this.getAttribute('src'))

            elmImg.setAttribute('src', this.getAttribute('src'))
        })
    }
    boite__caroussel__ferme.addEventListener('mousedown', function () {
        boite__caroussel.classList.remove('boite__caroussel__ouvrir')
    })
})()