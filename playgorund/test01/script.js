// const btn = document.getElementById('btn');
// const body = document.getElementById('body');
// function chnageColor(){
//     body.style.backgroundColor = 'cyan';
//     body.style.backgroundColor == 'red';

// }

// document.getElementById('btn').addEventListener('click' , chnageColor)

function welcome(){
    let message = document.getElementById('hello');
if (message.innerHTML === 'welcome frere'){

    message.innerHTML = 'bye frere';
}else{
    message.innerHTML = 'welcome frere';

}

}
document.addEventListener('DOMContentLoaded' , function(){
    function printName(event){
        event.preventDefault()
        const message = document.querySelector('#message2');
        const name = document.querySelector('#name').value;

        message.innerHTML = name;
        document.querySelector('body').style.backgroundColor = 'black';
}
document.querySelector('form').onsubmit = printName; 

})


// document.getElementById('btn').addEventListener('click', welcome);
document.querySelector('#btn').onclick = welcome;
div =document.querySelector('.regular');
function chnageDiv(){
    if(div.className==='regular'){

        div.className='funky';
    }else{
        div.className='regular'
    }

}
regular = document.querySelector('.regular').addEventListener('mouseover',chnageDiv);

funky =document.querySelector('.regular').addEventListener('mouseout',chnageDiv);



