<?php
namespace Magento\Theme\Block\Html\Header\Logo;

/**
 * Interceptor class for @see \Magento\Theme\Block\Html\Header\Logo
 */
class Interceptor extends \Magento\Theme\Block\Html\Header\Logo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $fileStorageHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getLogoSrc()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLogoSrc');
        if (!$pluginInfo) {
            return parent::getLogoSrc();
        } else {
            return $this->___callPlugins('getLogoSrc', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLogoAlt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLogoAlt');
        if (!$pluginInfo) {
            return parent::getLogoAlt();
        } else {
            return $this->___callPlugins('getLogoAlt', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLogoWidth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLogoWidth');
        if (!$pluginInfo) {
            return parent::getLogoWidth();
        } else {
            return $this->___callPlugins('getLogoWidth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLogoHeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLogoHeight');
        if (!$pluginInfo) {
            return parent::getLogoHeight();
        } else {
            return $this->___callPlugins('getLogoHeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        if (!$pluginInfo) {
            return parent::toHtml();
        } else {
            return $this->___callPlugins('toHtml', func_get_args(), $pluginInfo);
        }
    }
}
