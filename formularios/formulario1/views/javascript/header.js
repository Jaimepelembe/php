var header = document.getElementById("header");
var navigationHeader = document.getElementById("navigationHeader");
var content = document.getElementById("main");
var showSidebar = false;

function toggleSideBar() {

  showSidebar = !showSidebar; /*change the value of showSidebar*/
  if (showSidebar) {
    navigationHeader.style.right = "0px"; /*show the sidebar*/
    navigationHeader.style.animationName = "showSidebar";
    navigationHeader.style.display="flex";
    content.style.filter = "blur(2px)"; /*Blur the main content principal */
  } else {
    navigationHeader.style.right = "-180px"; /*hide the sidebar*/
    navigationHeader.style.animationName = "";
    content.style.filter = "";
  }
}


function closeSideBar() {
  if (showSidebar) {
    toggleSideBar();
  }
}

window.addEventListener("resize", function (event) {
  if (window.innerWidth > 768 && showSidebar) {
    toggleSideBar();
  }
});
