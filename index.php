<?php 
    $json_data = file_get_contents('http://18.224.23.171/images/magazine/getImages.json');
     $data= json_decode($json_data, true); 
?>
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="turn.js"></script>
<style type="text/css">

body {
  overflow: hidden;
}
.bookshelf{
  
  left: 20%;
  top:10%;
  position: absolute;
  box-shadow: 0 4px 10px #666;
  align-content: center;
  background: url("wall-bookshelf.png");
      background-size: 100%;
    background-repeat: no-repeat;
    background-position: bottom left;
    width: 70%;
    height: 80%;
    display: block;
    content: "";
    margin-left: -38px;
}
#flipbook {
      left: 12%;
      top: 05%;
    
}


#flipbook .page {
  width: 400px;
  height: 300px;
  background-color: white;
  line-height: 300px;
  font-size: 20px;
  text-align: center;
}

#flipbook .page-wrapper {
  -webkit-perspective: 2000px;
  -moz-perspective: 2000px;
  -ms-perspective: 2000px;
  -o-perspective: 2000px;
  perspective: 2000px;
}

#flipbook .hard {
  background:;
  color: #333;
  -webkit-box-shadow: inset 0 0 5px #666;
  -moz-box-shadow: inset 0 0 5px #666;
  -o-box-shadow: inset 0 0 5px #666;
  -ms-box-shadow: inset 0 0 5px #666;
  box-shadow: inset 0 0 5px #666;
  font-weight: bold;
}

#flipbook .odd {
  background: -webkit-gradient(linear, right top, left top, color-stop(0.95, #FFF), color-stop(1, #DADADA));
  background-image: -webkit-linear-gradient(right, #FFF 95%, #C4C4C4 100%);
  background-image: -moz-linear-gradient(right, #FFF 95%, #C4C4C4 100%);
  background-image: -ms-linear-gradient(right, #FFF 95%, #C4C4C4 100%);
  background-image: -o-linear-gradient(right, #FFF 95%, #C4C4C4 100%);
  background-image: linear-gradient(right, #FFF 95%, #C4C4C4 100%);
  -webkit-box-shadow: inset 0 0 5px #666;
  -moz-box-shadow: inset 0 0 5px #666;
  -o-box-shadow: inset 0 0 5px #666;
  -ms-box-shadow: inset 0 0 5px #666;
  box-shadow: inset 0 0 5px #666;
}

#flipbook .even {
  background: -webkit-gradient(linear, left top, right top, color-stop(0.95, #fff), color-stop(1, #dadada));
  background-image: -webkit-linear-gradient(left, #fff 95%, #dadada 100%);
  background-image: -moz-linear-gradient(left, #fff 95%, #dadada 100%);
  background-image: -ms-linear-gradient(left, #fff 95%, #dadada 100%);
  background-image: -o-linear-gradient(left, #fff 95%, #dadada 100%);
  background-image: linear-gradient(left, #fff 95%, #dadada 100%);
  -webkit-box-shadow: inset 0 0 5px #666;
  -moz-box-shadow: inset 0 0 5px #666;
  -o-box-shadow: inset 0 0 5px #666;
  -ms-box-shadow: inset 0 0 5px #666;
  box-shadow: inset 0 0 5px #666;
}
.imgfile{
  width: 100%;
  height: 100%;
}
</style>
</head>

<body>
  <h1>Magazine</h1>
<div class="bookshelf">
<div id="flipbook">
  <div class="hard"><h4 align="center">Magazine Book</h4></div>
  <div class="hard"></div>
    <?php 
      foreach ($data as $values){
    ?>
    <div><img class="imgfile" src="<?php echo $values; ?>" /></div> 
    <?php
     } 
     ?>
  <div class="hard"></div>
  <div class="hard"> <h4 align="center">The End</h4></div>
</div>
</div>


    <script type="text/javascript">
      $("#flipbook").turn({
        width: 500,
        height: 380,
        autocenter:true

      });

    </script>
    </body>
    </html>