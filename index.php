<!DOCTYPE html>
<html>
<head>
  <script src="./js/jquery-1.11.3.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <style media="screen">
  *{
    font-family: "Roboto";
  }


  .myButton {

}
.myButton:hover {

}
.myButton:active {
	position:relative;
	top:1px;
}


    .centered{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);
    }
    video{
      width: 100%;
    }

    #popUp{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);
      z-index: 10000;
      width: 300px;
      height: auto;
      white-space: pre-line;
      font-family: "Roboto";
      text-align: center;
      font-size: 25px;
      display: inline-block;
      vertical-align: middle;
      border-radius: 1px;
      background-color: white;
      padding: 2.5% 0;
    }

    .inline-block{
      width: 100%;
      display: table;
    }
    .twenty{
      display: table-cell;
      width: 20%;
    }
    .sixty{
      display: table-cell;
      width: 60%;
    }

    .info-container{
      width: 80%;
      margin: 0 10%;
      padding: 10%;
      -webkit-box-shadow: 0px 0px 1px 2px rgba(0,0,0,0.58);
      -moz-box-shadow: 0px 0px 1px 2px rgba(0,0,0,0.58);
      box-shadow: 0px 0px 1px 2px rgba(0,0,0,0.58);
    }
    .info-container button.ini{
      margin-top: 20px;
      width: 100%;

    }

  </style>
</head>
<body>
  <div id="popUp" style="visibility: hidden;"> <div id="popUpText">

  </div> </div>
  <center><h1>JS QRcode Reader</h1></center>
<div class="inline-block">
  <div class="twenty">
    <div class="info-container" id="info-cont">
      <div style="display:none;">Result: <span id="dbr"></span></div>
      <div class="select">
        <label for="videoSource">Device #: </label><select id="videoSource"></select>
      </div>
      <button id="go" class="ini">Iniciar</button>
    </div>

  </div>
  <div class="sixty">
    <div class="centered">
      <div>
        <video muted autoplay id="video" playsinline="true"></video>
        <canvas id="pcCanvas" width="640" height="480" style="display: none; float: bottom;"></canvas>
        <canvas id="mobileCanvas" width="240" height="320" style="display: none; float: bottom;"></canvas>
      </div>
    </div>
  </div>
  <div class="twenty">

  </div>
</div>

</body>

<a href="./sorteio.php" class="myButton" style="position: absolute; top:90%; right:90%;"> Sortear </a>

<script async src="./js/zxing.js"></script>
<script src="./js/video.js"></script>
<script src="./js/dbconn.js"></script>



</html>
