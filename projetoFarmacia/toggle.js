
var clicked = true;
var switchUser = window.document.getElementById('flexSwitchCheckDefault');
var trigger = window.document.getElementById('trigger');

var teste = window.document.getElementById('teste');

console.log(clicked)

switchUser.addEventListener('click', function(){


    if(trigger.style.display == 'block'){

        trigger.style.display = 'none';
        clicked = true;

        console.log(clicked);

        teste.innerHTML = clicked
        
    }else{

        trigger.style.display = 'block';
        clicked = false;

        console.log(clicked);

        teste.innerHTML = clicked

    }

})


