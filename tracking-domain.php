<?php
declare(strict_types=1);

$cookie = $_COOKIE['tracking-domain'] ?? md5((string)time());
if (! isset($_COOKIE['tracking-domain'])) {
    setcookie('tracking-domain', $cookie);
}

// Be aware, the 2nd parameter in postMessage is the origin of the message. If it
// does not resemble the origin (https://<domain>) of the iFrame, you will get an error.
?>
<script type="application/javascript">
    parent.postMessage("<?=$cookie?>", "<?=$_SERVER['HTTP_REFERER']?>")
</script>
