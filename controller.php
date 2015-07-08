<?php
namespace Concrete\Package\QrCode;

use Concrete\Core\Backup\ContentImporter,
    Package;

class Controller extends Package
{
    protected $pkgHandle = 'qr_code';
    protected $appVersionRequired = '5.7.4.2';
    protected $pkgVersion = '0.9.0';

    public function getPackageName()
    {
        return t('QR Code');
    }

    public function getPackageDescription()
    {
        return t('A package to insert QR codes into your website');
    }

    protected function installXmlContent()
    {
        $pkg = Package::getByHandle($this->pkgHandle);

        $ci = new ContentImporter();
        $ci->importContentFile($pkg->getPackagePath() . '/install.xml');
    }

    public function install()
    {
        parent::install();
        $this->installXmlContent();
    }

    public function upgrade()
    {
        parent::upgrade();
        $this->installXmlContent();
    }

    public function on_start()
    {

    }

}