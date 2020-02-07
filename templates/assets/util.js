var registeredElements = {};

function openSection(evt, sectionName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(sectionName).style.display = "block";
    evt.currentTarget.className += " active";
}

function registerOption(section, ans) {
    registeredElements[section] = ans;
    if (ans == 'yes') {
        document.getElementById(section + '-yes').classList.add('hideClass');
        document.getElementById(section + '-no').classList.remove('hideClass');
        document.getElementById(section + '-checked').classList.remove('hideClass');
    }
    else {
      document.getElementById(section + '-yes').classList.remove('hideClass');
      document.getElementById(section + '-no').classList.add('hideClass');
      document.getElementById(section + '-checked').classList.add('hideClass');
    }
}

function generatePlan(path) {
    window.open(path + '?sections=' + JSON.stringify(registeredElements));
    registeredElements = {};
      
    checked = document.getElementsByClassName("checked");
    for (i = 0; i < tablinks.length; i++)
      tablinks[i].className = tablinks[i].className.add("hideClass");
}