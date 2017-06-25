window.onload = function(){
document.getElementById('window1').style.display='block';
}

var mainContentWindow = document.getElementById('window1');
window.onclick = function(event) {
    if (event.target == mainContentWindow) {
        mainContentWindow.style.display = "none";
    }
}