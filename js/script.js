
const welcome = document.querySelector("#headerOut");
console.log(name);
function welcomer(name){
welcome.innerHTML += `Bienvenido ${name}`;
console.log("eoo");
}
welcomer(name);