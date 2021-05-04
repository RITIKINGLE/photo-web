 // Your web app's Firebase configuration
 var firebaseConfig = {
  apiKey: "AIzaSyAJ7bazDIcHenVOQmyfixT_VuuD1mJefpI",
  authDomain: "form-aadb7.firebaseapp.com",
  databaseURL: "https://form-aadb7-default-rtdb.firebaseio.com",
  projectId: "form-aadb7",
  storageBucket: "form-aadb7.appspot.com",
  messagingSenderId: "777365978819",
  appId: "1:777365978819:web:ec681a5be910cfb6baec76"
};  
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
// collection
let contactInfo = firebase.database().ref("data"); 
// listen
document.querySelector(".contact-form").addEventListener("submit",submitForm);

function submitForm(e) {
    e.preventDefault();

    // get input
    let name = document.querySelector("#Name").value;
    let email = document.querySelector("#Email").value;
    let number = document.querySelector("#Number").value;
    let message = document.querySelector("#Message").value;
    console.log(name, email, number, message );


   saveContactInfo(name, email, number, message);
 }
// saving data firebase
function saveContactInfo(name, email, number, message){
    let newContactInfo = contactInfo.push();

    newContactInfo.set({
        username:name,
        email:email,
        number:number,
        message:message,
    });
}