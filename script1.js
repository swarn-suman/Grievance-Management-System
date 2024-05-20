const fileSelector = document.getElementById('it')
const start = document.getElementById('cnv')
const progress = document.querySelector('.progress')
const textarea = document.querySelector('textarea')
start.addEventListener('click', function(event) {
    event.preventDefault();
    textarea.innerHTML = ''
    const rec = new Tesseract.TesseractWorker()
    rec.recognize(fileSelector.files[0],'hin')
        .progress(function (response) {
            if(response.status == 'recognizing text'){
                progress.innerHTML = response.status + '   ' + response.progress
            }else{
                progress.innerHTML = response.status
            }
        })
        .then(function (data) {
            textarea.innerHTML = data.text
            progress.innerHTML = 'Done'
        })
});
