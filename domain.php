<?php
declare(strict_types=1);
$xdomain = getenv('XDOMAIN');

$siteNumber = $_COOKIE['site_number'] ?? (string)rand(0,10);
if (!isset($_COOKIE['site_number'])) {
    setcookie('site_number', $siteNumber);
}

// In the evenListener, we check if the origin is from the iframe's origin (set in postMessage)
?>
<html lang="nl">
<head>
<title>My Site <?=$siteNumber?></title>
</head>
<body>
<?=$xdomain?>
<script type="application/javascript">
    window.addEventListener("message",
    function (e) {
        if (e.origin !== 'http://<?=$xdomain?>') { return; }
        console.log(e.data);
    },false);

    var iframe = document.createElement('iframe');
    iframe.style.display = 'none';
    iframe.src = 'http://<?=$xdomain?>';
    document.body.appendChild(iframe);
</script>
</body>
</html>
