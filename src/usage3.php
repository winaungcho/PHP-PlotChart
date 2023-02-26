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
    $setting = [
        "strtitle" => "Title is updated", 
        strstitle => "Subtitle", 
        ngy => 7, 
        ngx => 10
    ];
    echo "<h1>Usage 3</h1>";
	$plotchart = new PlotChart($setting);
    $plotchart->fitGraph($data);
    $plotchart->drawGrid();
    $plotchart->plotGraph($data);
    $plotchart->viewImage();
?>
