// Initialize Firebase (ADD YOUR OWN DATA)
    var firebaseConfig = {
        apiKey: "AIzaSyC72TTnfW6r2DGyBlQQJSAYIJyIpKCt4QA",
    authDomain: "edoc-b5de1.firebaseapp.com",
    databaseURL: "https://edoc-b5de1.firebaseio.com",
    projectId: "edoc-b5de1",
    storageBucket: "edoc-b5de1.appspot.com",
    messagingSenderId: "1072128580110",
    appId: "1:1072128580110:web:b5037102bfd030ca2e7a5f",
    measurementId: "G-L9MH4YK8SH"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);

// Reference messages collection
var messagesRef = firebase.database().ref('messages');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
  var name = getInputVal('name');
  var age = getInputVal('age');
  var weight = getInputVal('weight');
  var height = getInputVal('height');
  var gender = getInputVal('gender');
  var activity=getInputVal('activity');
document.write(age);
  //var message = getInputVal('message');

  // Save message
  saveMessage(name, age, weight, height,gender,activity);

  // Show alert
  document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}




// Save message to firebase
function saveMessage(name, age, weight, height,gender,activity){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
   age:age,
   weight:weight,
   height:height,
   gender:gender,
   activity:activity
  
  });
}