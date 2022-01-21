//classe active sur barre de nav
let links = document.getElementById("sous-menu").getElementsByTagName("a");
    
for(let i=0; i<links.length; i++){
    if(links[i].href == location.href){
        links[i].classList.add('active');
        }
    }

    