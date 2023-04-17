var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
var cursor = document.getElementById('cursor');
var introduction = document.querySelector('#intro');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.addEventListener('resize', function () {
    canvas.width = this.innerWidth;
    canvas.height = this.innerHeight;
})

canvas.addEventListener('mousemove', function (e) {
    ctx.beginPath();
    ctx.arc(e.clientX, e.clientY, (Math.random() * 35 + 10), 0, 2 * Math.PI);
    ctx.fillStyle = "rgba(" + (Math.round(Math.random() * 256)) + "," + Math.round(Math.random() * 256) + "," + Math.round(Math.random() * 256) + "," + (Math.random() * 0.3 + 0.7) + ")";
    ctx.fill();
})


introduction.addEventListener('click', function () {
    introduction.classList.toggle('hide');
})

canvas.addEventListener('click', function () {
    void ctx.clearRect(0, 0, canvas.width, canvas.height);
})
