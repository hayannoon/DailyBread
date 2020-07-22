
var currentTrack = null;
var paused = false;

$(document).ready(function() {
  currentTrack = $('#currentTrack').val();

  $("#play").click(function() { play(); });
  $("#stop").click(function() { stop(); });
  $("#pause").click(function() { pause(); });
});

function play() {

  //set the track back to the beginning
  if (!paused) {
    stop();
    currentTrack = $('#currentTrack').val();

    //make sure track starts from the begining each time
    document.getElementById(currentTrack).load();
  }

  //play the track
	document.getElementById(currentTrack).play();
}

//stop playing the current track
function stop() {
  if (currentTrack) {
    document.getElementById(currentTrack).pause();
    paused = false;
  }
}

//stop the track but don't go back to the beginning
function pause() {
  paused = true;
  document.getElementById(currentTrack).pause();
}
