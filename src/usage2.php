<?php
include("plotChart.php");
	$f = [];
    for ($i = 0;$i < 40;$i++)
    {
        $A = 10;
        $B = 400000;
        $f[u][$i][0] = $A*$i;
        $f[u][$i][1] = $B * sin($A*$i * 3.1415 / 180.0);
    }
    echo "<h1>Usage 2</h1>";
	$plotchart = new PlotChart();
    $plotchart->fitGraph($f);
    $plotchart->plotGraph($f);
    $plotchart->viewImage();
    
?>
