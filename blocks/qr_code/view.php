<?php
if (isset($qrCode)) { ?>
    <img src="<?= $qrCode->getDataUri() ?>" class="qr-code">
<?php
} else {
    echo t('Please enter a text to see a QR code');
}
