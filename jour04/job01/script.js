var button = document.getElementById('button');

button.addEventListener('click', function() {
  fetch('expression.txt')
    .then(response => response.text())
    .then(data => {
      var p = document.createElement('p');
      p.innerText = data;
      document.body.appendChild(p);
    });
});



