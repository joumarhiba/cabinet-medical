let form = document.getElementById("frml");
let ajt = document.getElementById("ajt");
let erreur = document.getElementById("msg");
function formValidation() {
  let nom = document.getElementById("nom").value;
  let prenom = document.getElementById("prenom").value;
  let dn = document.getElementById("dn").value;
  let tel = document.getElementById("tel").value;
  let mail = document.getElementById("email").value;
  let maladie = document.getElementById("maladie").value;
  
  const textRegex = /^[a-zA-Z-\s]+$/;
  const telRegex = /^(0|\+212)[5-7][0-9]{8}$/;
  const emailRegex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/;
  console.log(nom.trim(),prenom.trim(),dn,tel.trim(),mail.trim(),maladie.trim());
  if (
    nom.trim() === "" ||
    prenom.trim() === "" ||
    dn === "" ||
    tel.trim() === "" ||
    mail.trim() === "" ||
    maladie.trim() === ""
  ) {
    ShowMessage("Veuillez remplir tous les champs.","red");
    return false;
  } else if (
    !textRegex.test(nom) ||
    !textRegex.test(prenom) ||
    !textRegex.test(maladie)
  ) {
    ShowMessage("le nom, le prénom et la maladie n'acceptent que les lettres et les tirets.","red");
    return false;
  } else if (!telRegex.test(tel)) {
    ShowMessage("le numero de telephone invalide","red");
    return false;
  } else if (!emailRegex.test(mail)) {
    ShowMessage("Email invalide","red");
    return false;
  }
  ShowMessage("L'operation effectué avec succés :)","green");
  return true;
}
form.addEventListener("submit", function (e) {
  if (!formValidation()) {
    e.preventDefault();
  }
},false);


function ShowMessage(msg,color) {
  erreur.innerText = msg;
  erreur.style.color = color;
}