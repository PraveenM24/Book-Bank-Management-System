function redirect(){
  var dep = document.getElementById('department').value;
  var year = document.getElementById('year').value;
  if (dep == 'cse'){
    if (year == '1y'){
      window.open('../Module 4/CSE/CSE1.html');
    }
    else if (year == '2y') {
      window.open('../Module 4/CSE/CSE2.html');
    }
    else if (year == '3y') {
      window.open('../Module 4/CSE/CSE3.html');
    }
    else if (year == '4y') {
      window.open('../Module 4/CSE/CSE4.html');
    }
  }
  else if (dep == 'eee') {
    if (year == '1y'){
      window.open('../Module 4/EEE/EEE1.html');
    }
    else if (year == '2y') {
      window.open('../Module 4/EEE/EEE2.html');
    }
    else if (year == '3y') {
      window.open('../Module 4/EEE/EEE3.html');
    }
    else if (year == '4y') {
      window.open('../Module 4/EEE/EEE4.html');
    }
  }
  else if (dep == 'ece') {
    if (year == '1y'){
      window.open('../Module 4/ECE/ECE1.html');
    }
    else if (year == '2y') {
      window.open('../Module 4/ECE/ECE2.html');
    }
    else if (year == '3y') {
      window.open('../Module 4/ECE/ECE3.html');
    }
    else if (year == '4y') {
      window.open('../Module 4/ECE/ECE4.html');
    }
  }
}
