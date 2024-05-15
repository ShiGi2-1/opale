//les anglet 

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

const win = document.querySelector (".row-right");

window.addEventListener ("scroll", () => {
  console.log(window.scrollY);
  if(window.scrollY > 10){
    win.style.top = "-60px";
  }else {
    win.style.top = "155px"
  }
});

