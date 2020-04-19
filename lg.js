

<script>
function myFunction() {
  var txt;
  if (confirm("Are you sure you want to log out ?")) {
    firebase.auth().signOut().then(function() {
  // Sign-out successful.
}).catch(function(error) {
  // An error happened.
});

  } else {
    
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

