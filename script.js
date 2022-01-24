//classe active sur barre de nav
let links = document.getElementById("sous-menu").getElementsByTagName("a");

//Le script construit la liste de tous les liens contenus dans le sous-menu. Il compare l'URL du lien avec celui de la page courante, en location.href, et lorsque il est identique, lui attribue la classe "active".
    
for(let i=0; i<links.length; i++){
    if(links[i].href == location.href){
        links[0].classList.remove('active');
        links[i].classList.add('active');
        }
    }

