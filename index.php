<!DOCTYPE html>
<html>
<head>
    <title>LiteCoin(LTC) Price Stats</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="Litecoin, LTC, Litecoin price, Litecoin Stats">
    <link href="./css/default.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="./js/chart.js"></script>
</head>

<body>
    <header class="header">
        <h1>Litecoin Stats</h1>
        <img src="./images/litecoin.png" alt="litecoin" width="150">
    </header>
    <div class="nav">
        <li class="navlink"><a href="BitcoinStat.php" class="center">Bitcoin</a></li>
        <li class="navlink"><a href="BitcoinCashStat.php" class="center">Bitcoin Cash</a></li>
        <li class="navlink"><a href="LitecoinStat.php" class="center">Litecoin</a></li>
        <li class="navlink"><a href="EthereumStat.php" class="center">Ethereum</a></li>
    </div>
    <div class="price">
        <p class="priceTitle">Litecoin Price</p><br>
        <p id="priceNumber"></p>
    </div>
    <div id="chart" class="chart"></div>
</body>