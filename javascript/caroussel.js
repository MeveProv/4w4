(function(){

    let boite__caroussel = document.querySelector('.boite__caroussel');
    let boite__caroussel__ferme = document.querySelector('.boite__caroussel__ferme');
    let boite__caroussel__navigation = document.querySelector('.boite__caroussel__navigation');
    let boite__caroussel__img = document.querySelector('.boite__caroussel__img');
    let galerie__img = document.querySelectorAll('.galerie img')

    console.log(galerie__img.length);
    let elmImg = document.createElement('img');
    boite__caroussel.append(elmImg)
    let index = 0;
    
    for (const img of galerie__img) {
        let elmImg = document.createElement('img');
        elmImg.setAttribute('src', img.getAttribute('src'))
        console.log("elmImg src =" + elmImg.getAttribute('src'))
        boite__caroussel__img.append(elmImg)
        let bouton = document.createElement('input')
        bouton.setAttribute('type','radio')
        bouton.setAttribute('checked','')
        bouton.setAttribute('name','bouton')
        bouton.setAttribute('class','bouton')

        bouton.dataset.index = index
        boite__caroussel__navigation.append(bouton)

        
       
        bouton.addEventListener('change', function(e){
            e.preventDefault
            console.log(e)
            console.log(this.getAttribute('checked'))
            boite__caroussel__img.children[this.dataset.index].classList.remove('img--ouvrir')
            boite__caroussel__img.children[this.dataset.index].classList.add('img--ouvrir')
        //elmImg.setAttribute('src', galerie__img[index].getAttribute('src'))


        })
        
        img.addEventListener('mousedown', function () {
            //console.log(this.tagName);
            boite__caroussel.classList.add('boite__caroussel__ouvrir')

            //console.log(boite__caroussel.classList);
            
            //console.log(this.getAttribute('src'))

            //elmImg.setAttribute('src', this.getAttribute('src'))
            boite__caroussel__img.children[0].classList.add('img--ouvrir')
        })
        index++
    }
    boite__caroussel__ferme.addEventListener('mousedown', function () {
        boite__caroussel.classList.remove('boite__caroussel__ouvrir')
    })
})()