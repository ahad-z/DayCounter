<!DOCTYPE html>
<html>
<head>
  <title>Counter Day!</title>
  <style type="text/css">
    body{
      background: #f6f6f6;
    }
    .countdownContainer{
      position: absolute;
      top:50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);
      text-align: center;
      background: #ddd;
      border:1px solid #999;
      padding:10px;
      box-shadow: 0 0 5px 3px #ccc; 
    }
    .info{
      font-size: 80px;
    }
  </style>
</head>
<body>

  <table class="countdownContainer">
    <tr class="info">
      <td colspan="4">Ramadan 2021 will begin</td>
    </tr>
    <tr class="info">
      <td id="days"></td>
      <td id="hours"></td>
      <td id="minutes"></td>
      <td id="seconds"></td>
    </tr>
     <tr>
      <td>Days</td>
      <td>Hours</td>
      <td>Minutes</td>
      <td>Seconds</td>
    </tr>
  </table>

</body>
</html>

<script>
  function countDown(){

      var now = new Date();
      var eventDate = new Date("April 12, 2021 18:18:25");
      var curentTime = now.getTime();
      var eventTime = eventDate.getTime();
  
      var remTime = eventTime - curentTime;
      var s = Math.floor(remTime/1000);
      var m = Math.floor(s/60);
      var h = Math.floor(m/60);
      var d = Math.floor(h/24);

      h %=24;

      m %=60;

      s %=60;


    h = (h < 10) ? "0" + h : h ;
    m = (m < 10) ? "0" + m : m ;
    s = (s < 10) ? "0" + s : s ;

    document.getElementById("days").innerText = d;
    document.getElementById("hours").innerText = h;
    document.getElementById("minutes").innerText = m;
    document.getElementById("seconds").innerText = s;

    setTimeout(countDown, 1000);
  }

countDown();




// var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// // var x = setInterval(function() {

  
//   var now = new Date().getTime();


//   var distance = countDownDate - now;




//   document.write(distance);

// //   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
// //   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
// //   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
// //   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

 
// //   document.getElementById("demo").innerHTML = days + "d " + hours + "h "
// //   + minutes + "m " + seconds + "s ";

// //   // If the count down is finished, write some text
// //   if (distance < 0) {
// //     clearInterval(x);
// //     document.getElementById("demo").innerHTML = "EXPIRED";
// //   }
// // }, 1000);


</script>