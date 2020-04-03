$.ajaxSetup({
  xhrFields: {
    withCredentials: true
  }
});


function main(){

    var game = new Game();
    doPolling(game);

    var elem = document.getElementById('callField'),
        elemLeft = elem.offsetLeft,
        elemTop = elem.offsetTop,
        context = elem.getContext('2d'),
        elements = [];

    // Add event listener for `click` events.
    elem.addEventListener('click', function(event) {
        var c = document.getElementById("callField");
        var rect = c.getBoundingClientRect();
        var ctx = c.getContext("2d");

        var x =(event.clientX-rect.left)*c.width/rect.width,
            y = (event.clientY-rect.top)*c.height/rect.height;
        game.clicked(x,y);
    }, false);

}

main()
