<div class="container">
    <div class="card-panel">
        <?= $error; ?>
        <br>
        From <?= $from ?> to <?= $to ?> <br>
        <?php if($output > 60){
        $minutes = floor($output/60);
        $seconds = $output - ($minutes*60);
        echo $minutes . ' minutes and ' . $seconds . ' seconds <br>';
        echo floor($output) . ' steps';
        } ?>
        <?php
        $route = explode("', '", $output2);
        ?>
        <?php //foreach($output2 as $node => $connector){echo $node.'<br>';}?>
    </div>
</div>
<div class="row">
    <canvas id="myCanvas" width="1600" height="800" style="position: relative;">
    Sorry, your browser doesn't support canvas technology
    </canvas>
</div>
<div class="container" >
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <form method="post">
                    <div class="row">
                        <div class="col s6">
                            <div class="form-group">
                                <label for="email">From:</label>
                                <select id='from' name="from" style='width: 100%'>;
                                    <?php foreach($buildings as $building => $rooms):?>
                                    <optgroup label=<?= $building?>>
                                        <?php foreach($rooms as $room):?>
                                        <option value=<?= $room->room; ?>><?= $room->room; ?></option>);
                                        <?php endforeach ?>
                                    </optgroup>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col s6">
                            <div class="form-group">
                                <label for="email">To:</label>
                                <select id='to' name="to" style='width: 100%'>;
                                    <?php foreach($buildings as $building => $rooms):?>
                                    <optgroup label=<?= $building?>>
                                        <?php foreach($rooms as $room):?>
                                        <option value=<?= $room->room; ?>><?= $room->room; ?></option>);
                                        <?php endforeach ?>
                                    </optgroup>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Calculate</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function drawShape() {
var myCanvas = document.getElementById("myCanvas");
var ctx = myCanvas.getContext("2d");
var img = new Image();
img.onload = function() {
ctx.drawImage(img, 0, 0);
<?php
$nodes = Nodes::findAll();
foreach($nodes as $node){
if(!$node->x){
$node->x = 0;
}
if(!$node->y){
$node->y = 0;
}
echo ('var '.$node->identifier.' = new circle(ctx,'.$node->x.','.$node->y.');');
}
?>
// connect(ctx, ReceptionE, Reception);
// highlight(ctx, ReceptionE, Reception);
// highlight(ctx, Arts, Music2);
<?php
for($i = count($route) - 1; $i > 0; $i--) {
$j = $i - 1;
echo "highlight(ctx, $route[$i], $route[$j]);";
}
?>
};
img.src = '/public/images/denefield.png';
}
function circle(ctx, x=0, y=0){
this.x = x;
this.y = y;
// ctx.beginPath();
// ctx.arc(x, y, 6, 0, 2 * Math.PI);
// ctx.stroke();
// ctx.beginPath();
// ctx.arc(x, y, 3, 0, 2 * Math.PI);
// ctx.fill();
}
function connect(ctx, first, second){
ctx.beginPath();
ctx.moveTo(first.x, first.y);
ctx.lineTo(second.x, second.y);
ctx.stroke();
}
function highlight(ctx, first, second){
ctx.beginPath();
ctx.moveTo(first.x, first.y);
ctx.lineTo(second.x, second.y);
ctx.strokeStyle = '#ff0000';
ctx.lineWidth = 3;
ctx.stroke();
}
</script>