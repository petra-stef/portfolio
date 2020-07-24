function customMenu() {
  var btnContainer = document.getElementsByClassName("navbar");
  // Get all buttons with class="menu" inside the container
  var btns = btnContainer[0].getElementsByClassName("menu");
  // Loop through the buttons and add the active class to the current/clicked button
  const pagefile = window.location.pathname
  let target = -1
  for (var i = 0; i < btns.length; i++) {
    if (pagefile == btns[i].pathname) {
      btns[i].style.color = "#FFFFFF";
    } else if (pagefile.endsWith("/") || pagefile === "") {
      btns[0].style.color = "#FFFFFF";
      // btns[i].addEventListener("click", function () {
      //   var current = document.getElementsByClassName("active");
      //   current[0].className = current[0].className.replace(" active", "");
      //   this.className += " active";
      // });
    }
  }
}