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
    'getPoolBlocks',
    'getCurrentBlockHeight',
    'getCurrentBlockReward',
    'getAddressReceivedNumber',
    'getAddressTransmitBitcoins',
    'getAddressBalance',
    'getAddressTimestamp',
    'getTransationTotalOutputValue',
    'getTransationTotalInputValue',
    'getTransactionFree',
    'calculateResult',
    'convertAddressToHash',
    'convertHashToAddress',
    'convertKeyToHash',
    'convertKeyToAddress',
    'convertAddressToPublicKey',
    'getExchangeRate',
    'convertToBTC',
    'getDataBehindCharts',
    'getDataBehindStats',
    'getDataBehindPoolsInformation'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

