let Lang = document.querySelector('.Lang');
let Img = document.querySelector('.image');

console.log(Lang.textContent);

if(Lang.textContent == "Js"){
    Img.setAttribute('src', './img/square-js-brands.svg');
}else if(Lang.textContent == "PHP"){
    Img.setAttribute('src', './img/php-brands.svg');
}else if(Lang.textContent == "Sql"){
    Img.setAttribute('src', './img/database-solid.svg');
}else if(Lang.textContent == "Python"){
    Img.setAttribute('src', './img/python-brands.svg');
}else if(Lang.textContent == "Java"){
    Img.setAttribute('src', './img/java-brands.svg');
}else if(Lang.textContent == "HTML"){
    Img.setAttribute('src', './img/html5-brands.svg');
}else if(Lang.textContent == "CSS"){
    Img.setAttribute('src', './img/css3-alt-brands.svg');
}

