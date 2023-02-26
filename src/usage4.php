<?php
include("plotChart.php");
	$data = [
        showvalue => true, 
        pointmode => 1, 
        drawvert => true, 
        drawline => false, 
        color => 'AA0000', 
        value_color => '000000',
        u => [
            [-100, -45000], 
            [0, 60000], 
            [200, 360000], 
            [400, -260000], 
            [480, 80000]
        ]
    ];
    // example 3
    $setting = [
        "strtitle" => "Title is updated", 
        strstitle => "Subtitle", 
        ngy => 7, 
        ngx => 10
    ];
    
    // example 4
    $f = [];
    for ($i = 0;$i < 40;$i++)
    {
        $A = 10;
        $B = 400000;
        $f[u][$i][0] = $A*$i;
        $f[u][$i][1] = $B * sin($A*$i * 3.1415 / 180.0);
    }
    echo "<h1>Usage 4</h1>";
	$plotchart = new PlotChart($setting);
    $plotchart->fitGraph($data);
    $plotchart->fitGraph($f);
    $plotchart->drawGrid();
    $plotchart->plotGraph($data);
    $plotchart->plotGraph($f);
    $plotchart->viewImage();
?>
