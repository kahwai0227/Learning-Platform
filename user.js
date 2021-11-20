function user() {
    var userNavButton = '<input type="image" src="images/navIcon.png" onclick="myFunction()" class="dropbtn"><div id="myDropdown" class="dropdown-content"><a href="#home">My Profile</a><a href="#about">My Courses</a></div>';
    var myobj = document.getElementById("guest-nav");
    myobj.remove();
    document.getElementById("dropDown").innerHTML = userNavButton;
}
