<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canvas</title>
</head>
<body>

<canvas id="myCanvas" width="1700px" height="1000px"></canvas>

<script type="text/javascript">
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");

    for(i = 0; i < canvas.width; i++){
        for(j = 0; j < canvas.height; j++){

            // isi nilai titik dengan bilangan acak
            var x = Math.floor(Math.random() * canvas.width);
            var y = Math.floor(Math.random() * canvas.height);

            // gambar titknya

            ctx.fillRect(x, y, 1,1);

        }
    }
    // for(i = 0; i < 10; i++){
    //     for(j = 0; j < 10; j++){
    //         // isi nilai titik dengan bilangan acak
    //         var x = Math.floor(Math.random() * canvas.width);
    //         var y = Math.floor(Math.random() * canvas.height);

    //         // gambar perseginya
    //         ctx.fillRect(x, y, 10,10);

    //     }
    // }
    
</script>
</body>
</html>