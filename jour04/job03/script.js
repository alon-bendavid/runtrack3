
// function to populate the options of select field
function populateSelect(){
  fetch("pokemon.json")
  .then(response => response.json())
  .then(data => {
    let select = document.getElementById("type");
    let uniqueTypes = new Set();
    
    data.forEach(item => {
      item.type.forEach(type => uniqueTypes.add(type));
    });
    uniqueTypes.forEach(type => {
      let option = document.createElement("option");
      option.value = type;
      option.text = type;
      select.appendChild(option);
    });
  });
}
// call the function on page load
populateSelect();

function filterData() {
  let id = document.getElementById("id").value;
  let name = document.getElementById("name").value;
  let type = document.getElementById("type").value;
  let resultDiv = document.getElementById("result");

  fetch("pokemon.json")
    .then(response => response.json())
    .then(data => {
      let filteredData = data.filter(item => {
        if (id && item.id != id) {
          return false;
        }
        if (name && !Object.values(item.name).includes(name)) {
          return false;
        }
        if (type && !item.type.includes(type)) {
          return false;
        }
        return true;
      });

      // display the filtered data on the HTML page
      resultDiv.innerHTML = "";
      filteredData.forEach(item => {
        let p = document.createElement("p");
        p.innerHTML = `id: ${item.id} name: ${item.name.english} type: ${item.type}`;
        resultDiv.appendChild(p);
      });
    });
}
