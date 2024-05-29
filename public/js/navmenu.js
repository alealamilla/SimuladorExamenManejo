var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;

    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
      this.style.backgroundColor = "transparent"; 
    } else {
      dropdownContent.style.display = "block";
      this.style.backgroundColor = "#dde1ea"; 
    }
  });
}


function toggleMenu() {
    var menu = document.querySelector('.sidenav');
    menu.classList.toggle('active');
}

function UpMenu() {
  var upMenu = document.getElementById('up-menu');

  if (upMenu) {
    upMenu.style.display = (upMenu.style.display === 'none') ? '' : 'none';
  }
}

