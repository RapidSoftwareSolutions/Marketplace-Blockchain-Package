<?php
$routes = [
    'metadata',
    'getSingleBlock',
    'getSingleTransaction',
    'getChartData',
    'getBlockForSpecifiedHeight',
    'getSingleAddress',
    'getMultiAddress',
    'getUnspentOutputs',
    'getBalance',
    'getLatestBlock',
    'getUnconfirmedTransactions',
    'getDayBlocks',
    'getPoolBlocks'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

