function validate(event) {
  var uname = document.getElementById('username').value;
  var pwd = document.getElementById('password').value;
  if (uname && pwd){
  if (pwd == uname){
    window.location.href="../Module 3/index.html";
  }
  else{
    alert("Invalid Username (or) Password");
  }}
  else{
    alert("Input field cannot be empty");
  }
};
