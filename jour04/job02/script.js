
function getValueByKey(data, key) {
  if(data.hasOwnProperty(key)){
      return data[key];
  }else{
      return 'Key not found';
  }
}
var data = {
  name: "La Plateforme_",
  address: "8 rue d'hozier",
  city: "Marseille",
  nb_staff: "11",
  creation:"2019"
};

var city = getValueByKey(data, "city");
console.log(city); 
