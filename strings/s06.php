<?php
//x-mas tree

function drawLeaves($treeWidth){
    for ($i = 1; $i <= $treeWidth; $i += 2) {
        $leaves = str_repeat(" ", ($treeWidth - $i) / 2) . str_repeat("*", $i) . "\n";
        echo $leaves;
    }
}

function drawTrunk($treeWidth, $trunkHeight){
    $trunk = str_repeat(" ", ($treeWidth + 1) / 2 - 1) . "*\n";
    for ($i = 1; $i <= $trunkHeight; $i++) {
        echo $trunk;
    }
}

function drawXMasTree($treeWidth=10, $trunkHeight=5){
    drawLeaves($treeWidth);
    drawTrunk($treeWidth, $trunkHeight);
}

drawXMasTree(18);


