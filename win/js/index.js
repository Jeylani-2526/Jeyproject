// Set the date we're counting down to
var countDownDate = new Date("jun 10, 2023 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  var counter = document.getElementById("countdown");
  counter.innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED U CAME LATE";
  }
}, 1000);

const win = document.querySelector("#winner");
var myModal = new bootsrap.Modal(document.getElementById('modal'),{
    keyboard: false
})





win.addEventListener('click', function(){
setTimeout(function(){
    myModal.show();
},50000); 
});
