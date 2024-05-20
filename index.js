var recognition = new webkitSpeechRecognition();
recognition.continuous = true;
recognition.interimResults = true;
recognition.lang = "hi-IN";

var listening = false;

recognition.onresult = function(event) {
    var interim_transcript = '';
    var final_transcript = '';

    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
         document.getElementById('transcript').value += event.results[i][0].transcript;
        toggle();
    }
   } console.log(interim_transcript, final_transcript);

  };

function toggle() {
  if(listening) {
    recognition.stop();  
    listening = false;
  document.getElementById('action').value = "Start";
  }
  else {
    recognition.start();
    listening = true;
  document.getElementById('action').value = "Stop";
  }
}

