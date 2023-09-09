let step = 1;

function nextStep() {
    const progressBar = document.querySelector(`.progress.${step}`);
    const progressLetter = document.getElementById(`lette${step}`);
    progressBar.style.backgroundColor = '#0A2B5D';
    progressLetter.style.color = '#0A2B5D';
    step++;
}
