// const form = document.getElementById("form");

// form.addEventListener("submit", function(event){
//     event.preventDefault();
//     var inputs = document.querySelectorAll("input:not([type=submit])");
//     var data = {};
//     for(var i = 0; i < inputs.length; i++) {
//         data[inputs[i].id] = inputs[i].value;
//     }

//     fetch('signup.php', {
//         method: 'POST',
//         body: JSON.stringify(data),
//         headers: { 'Content-Type': 'application/json' }
//     })
//     .then(res => res.json())
//     .then(response => {
//         console.log(response);
//     })
//     .catch(error => {
//         console.error('Error:', error);
//     });
// });
