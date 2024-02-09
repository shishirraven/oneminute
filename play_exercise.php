<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="flex items-center justify-center h-screen flex-col px-10 gap-12 text-center">
  <div class="text-xl font-semibold font-serif">
    You can now focus on your work and I will remind you of your exercise in time
  </div>
  <div class="text-slate-400  font-serif text-2xl">
    Exercise in <div id="time"></div>
  </div>
</div>
<script>
    var time = 1 * 60;

    var interval = setInterval(function() {
        var minutes = Math.floor(time / 60);
        var seconds = time % 60;

        if (time <= 0) {
            // redirect to page called "run_exercise.php`"
            window.location.href = 'run_exercise.php';
            clearInterval(interval);
        } else {
            time--;
        }
        //update the time in id time
        document.getElementById('time').innerHTML = minutes + ':' + seconds;

    }, 1000);
  

</script>
    
</body>
</html>