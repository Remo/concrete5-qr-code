<?php
namespace Concrete\Package\QrCode\Block\QrCode;

use Concrete\Core\Block\BlockController,
    Endroid\QrCode\QrCode;

class Controller extends BlockController
{
    protected $btTable = 'btQrCode';
    protected $btInterfaceWidth = "500";
    protected $btInterfaceHeight = "365";
    protected $helpers = ['form'];

    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;

    public function getBlockTypeName()
    {
        return t('QR Code');
    }

    public function getBlockTypeDescription()
    {
        return t('Inserts a QR Code into your website');
    }

    protected function convertColor($colorString)
    {
        $colorString = str_replace('rgb', '', $colorString);
        $colorString = trim($colorString, '()');

        $colorValues = preg_split('[,]', $colorString);

        return [
            'r' => $colorValues[0],
            'g' => $colorValues[1],
            'b' => $colorValues[2],
        ];
    }

    public function view()
    {
        $vendorPath = realpath(__DIR__ . '/../../vendor/');
        require_once $vendorPath . '/autoload.php';

        if ($this->text) {
            $qrCode = new QrCode();
            $qrCode
                ->setText($this->text)
                ->setSize($this->size)
                ->setPadding($this->padding)
                ->setErrorCorrection($this->error_correction)
                ->setForegroundColor($this->convertColor($this->foreground_color))
                ->setBackgroundColor($this->convertColor($this->background_color))
                ->setLabel($this->label)
                ->setLabelFontSize($this->label_font_size);

            $this->set('qrCode', $qrCode);
        }
    }
}