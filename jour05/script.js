document.getElementById("signup-form").addEventListener("submit", function(event) {
    event.preventDefault();
    console.log(event);

    let nom = document.getElementById('nom').value;
    let lastName = document.getElementById('lastName').value;
    let email = document.getElementById('email').value;
    let pwd = document.getElementById('pwd').value;
    let pwdVerify = document.getElementById('pwdVerify').value;
    let data = {nom: nom, lastName: lastName, email: email, pwd: pwd, pwdVerify: pwdVerify};
    console.log(data);

    fetch('index.php', {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
          'Content-Type': 'application/json'
        }
    })
    .then(res => res.text())
    .then(data => {
        console.log(data);
    });
});
