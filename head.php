  <?php         session_start(); ?>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="icon" href="favicon.ico" type="image/png">  

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/normalize.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,600;1,200&display=swap"
        rel="stylesheet">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/5e76fe3869.js" crossorigin="anonymous"></script>
    <!-- CSS Neumophic buttons -->
    <link rel="stylesheet" href="css/neumophic_buttons.css">
  <link href="css/style.css" rel="stylesheet">
  <style>
        
         #canvasarea
         {
            border:black 1px solid;
         }
      </style>
      <script type="text/javascript">
         function setcanvas()
         {
            var canvas = document.getElementById("canvasarea");
            if (canvas.getContext)
            {
               var ctx = canvas.getContext("2d");
               drawcanvas(ctx);
            }
            else
            {
               alert("Canvas NOT supported");
            }
         }
         
         function drawcanvas(ctx)
         {

               //Shape0;
               ctx.shadowColor ="rgba(0,0,0,0)";
               ctx.strokeStyle ="rgba(0,0,0,1)";
               ctx.lineWidth = 3;
               ctx.lineCap = "butt";
               ctx.lineJoin = "miter";
               ctx.beginPath();
               ctx.moveTo(26,52);
               ctx.lineTo(124,52);
               ctx.bezierCurveTo(130,52,134,56,134,62);
               ctx.lineTo(134,79);
               ctx.bezierCurveTo(134,85,130,89,124,89);
               ctx.lineTo(26,89);
               ctx.bezierCurveTo(20,89,16,85,16,79);
               ctx.lineTo(16,62);
               ctx.bezierCurveTo(16,56,20,52,26,52);
               ctx.closePath();
               ctx.stroke();
               ctx.shadowOffsetX = 6;
               ctx.shadowOffsetY = 6;
               ctx.shadowBlur = 7.4;
               ctx.shadowColor = "rgba(0,0,0,1)";
               grad = ctx.createLinearGradient(16,70,134,71);
               grad.addColorStop(0,"rgba(176,65,62,0.75)");
               grad.addColorStop(1,"rgba(176,65,62,1)");
               ctx.fillStyle = grad;
               ctx.fill();

               //Shape1;
               ctx.shadowColor ="rgba(0,0,0,0)";
               ctx.strokeStyle ="rgba(0,0,0,1)";
               ctx.lineWidth = 1;
               ctx.lineCap = "butt";
               ctx.lineJoin = "miter";
               ctx.beginPath();
               ctx.moveTo(46,91);
               ctx.bezierCurveTo(51,91,56,95,56,101);
               ctx.bezierCurveTo(56,106,51,111,46,111);
               ctx.bezierCurveTo(40,111,35,106,35,101);
               ctx.bezierCurveTo(35,95,40,91,46,91);
               ctx.closePath();
               ctx.stroke();
               ctx.shadowOffsetX = 5;
               ctx.shadowOffsetY = 1;
               ctx.shadowBlur = 8.6;
               ctx.shadowColor = "rgba(0,0,0,0.61)";
               ctx.fillStyle = "rgba(30,7,7,1)";
               ctx.fill();

               //Shape2;
               ctx.shadowColor ="rgba(0,0,0,0)";
               ctx.strokeStyle ="rgba(0,0,0,1)";
               ctx.lineWidth = 1;
               ctx.lineCap = "butt";
               ctx.lineJoin = "miter";
               ctx.beginPath();
               ctx.moveTo(101,90);
               ctx.bezierCurveTo(106,90,111,94,111,100);
               ctx.bezierCurveTo(111,105,106,110,101,110);
               ctx.bezierCurveTo(95,110,90,105,90,100);
               ctx.bezierCurveTo(90,94,95,90,101,90);
               ctx.closePath();
               ctx.stroke();
               ctx.shadowOffsetX = 5;
               ctx.shadowOffsetY = 0;
               ctx.shadowBlur = 9.2;
               ctx.shadowColor = "rgba(0,0,0,0.64)";
               ctx.fillStyle = "rgba(0,0,0,1)";
               ctx.fill();

               //Shape3;
               ctx.shadowColor ="rgba(0,0,0,0)";
               ctx.strokeStyle ="rgba(0,0,0,1)";
               ctx.lineWidth = 1;
               ctx.lineCap = "butt";
               ctx.lineJoin = "miter";
               ctx.beginPath();
               ctx.moveTo(46,96);
               ctx.bezierCurveTo(49,96,51,98,51,101);
               ctx.bezierCurveTo(51,104,49,106,46,106);
               ctx.bezierCurveTo(42,106,40,104,40,101);
               ctx.bezierCurveTo(40,98,42,96,46,96);
               ctx.closePath();
               ctx.stroke();
               ctx.shadowOffsetX = 15;
               ctx.shadowOffsetY = 15;
               ctx.shadowBlur = 0;
               ctx.shadowColor = "rgba(0,0,0,0)";
               grad = ctx.createLinearGradient(40,101,51,101);
               grad.addColorStop(0,"rgba(204,230,237,0.65)");
               grad.addColorStop(1,"rgba(204,230,237,1)");
               ctx.fillStyle = grad;
               ctx.fill();

               //Shape4;
               ctx.shadowColor ="rgba(0,0,0,0)";
               ctx.strokeStyle ="rgba(0,0,0,1)";
               ctx.lineWidth = 1;
               ctx.lineCap = "butt";
               ctx.lineJoin = "miter";
               ctx.beginPath();
               ctx.moveTo(101,95);
               ctx.bezierCurveTo(104,95,106,97,106,100);
               ctx.bezierCurveTo(106,103,104,105,101,105);
               ctx.bezierCurveTo(97,105,95,103,95,100);
               ctx.bezierCurveTo(95,97,97,95,101,95);
               ctx.closePath();
               ctx.stroke();
               ctx.shadowOffsetX = 15;
               ctx.shadowOffsetY = 15;
               ctx.shadowBlur = 0;
               ctx.shadowColor = "rgba(0,0,0,0)";
               grad = ctx.createLinearGradient(95,100,106,100);
               grad.addColorStop(0,"rgba(204,230,237,0.6699999999999999)");
               grad.addColorStop(1,"rgba(204,230,237,1)");
               ctx.fillStyle = grad;
               ctx.fill();
         }
      </script>
  <title>CSSkate</title>