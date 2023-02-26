<?php
include("plotChart.php");
	$data = [
        u => [
            [-100, -45000], 
            [0, 60000], 
            [200, 360000], 
            [400, -260000], 
            [480, 80000]
        ]
    ];
    echo "<h1>Usage 1</h1>";
	$plotchart = new PlotChart();
    $plotchart->fitGraph($data);
    $plotchart->plotGraph($data);
    $plotchart->viewImage();
?>
