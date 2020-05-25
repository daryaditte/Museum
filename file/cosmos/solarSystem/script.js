$('.modal').on('hidden.bs.modal', function () {
    var video = document.getElementsByTagName('video');
	for (var i = 0; i < video.length; i++) {
		video[i].pause();
	}
});

var rocket = document.getElementById('rocket');
rocket.onmousedown = function(e) {
  rocket.style.position = 'absolute';
  moveAt(e);
  document.body.appendChild(rocket);
  function moveAt(e) {
    rocket.style.width = 70 + 'px';
    rocket.style.left = e.pageX - rocket.offsetWidth / 2 + 'px';
    rocket.style.top = e.pageY - rocket.offsetHeight / 2 + 'px';
  }
  document.onmousemove = function(e) {
    moveAt(e);
  }
  rocket.onmouseup = function() {
    document.onmousemove = null;
    rocket.onmouseup = null;
  }
}
rocket.ondragstart = function() {
  return false;
};

/*
      
var Sun = document.querySelector('#Sun');
Sun.onclick = function() {
    if (Sun.checked) { alert("Пристегните ремни!"); }
}

var Mercury = document.querySelector('#Mercury');
Mercury.onclick = function() {
    if (Mercury.checked) {
        if(confirm( 'Вы желаете посетить планету Меркурий?')){
            alert("Пристегните ремни!"); 
            }
        else{
            alert("Рейс отменен");
        }
    }
}

var Venus = document.querySelector('#Venus');
Venus.onclick = function() {
    if (Venus.checked) {
        { alert("Пристегните ремни!"); }
    }
}

var Earth = document.querySelector('#Earth');
Earth.onclick = function() {
    if (Earth.checked) {
        { alert("Пристегните ремни!"); }
    }
}

var Mars = document.querySelector('#Mars');
Mars.onclick = function() {
    if (Mars.checked) {
        { alert("Пристегните ремни!"); }
    }
}

var Jupiter = document.querySelector('#Jupiter');
Jupiter.onclick = function() {
    if (Jupiter.checked) {
        { alert("Пристегните ремни!"); }
    }
}

var Saturn = document.querySelector('#Saturn');
Saturn.onclick = function() {
    if (Saturn.checked) {
       { alert("Пристегните ремни!"); }
    }
}

var Uranus = document.querySelector('#Uranus');
Uranus.onclick = function() {
    if (Uranus.checked) {
   { alert("Пристегните ремни!"); }
    }
}

var Neptune = document.querySelector('#Neptune');
Neptune.onclick = function() {
    if (Neptune.checked) {
        { alert("Пристегните ремни!"); }
    }
}

var Pluto = document.querySelector('#Pluto');
Pluto.onclick = function() {
    if (Pluto.checked) {
        { alert("Пристегните ремни!"); }
}}


        
      
        */