<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Js Clock</title>
</head>

<body>
    <div class="main">
        <div id="root">
        </div>
    </div>
</body>
<?php
echo "<script>
var Time = document.getElementById('root');
function getTime() {
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    Time.innerHTML= h + ':' + m + ':' + s;
}

setInterval(getTime, 1000)
</script>"
?>

</html>