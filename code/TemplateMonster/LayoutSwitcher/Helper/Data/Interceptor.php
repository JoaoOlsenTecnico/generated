<?php
namespace TemplateMonster\LayoutSwitcher\Helper\Data;

/**
 * Interceptor class for @see \TemplateMonster\LayoutSwitcher\Helper\Data
 */
class Interceptor extends \TemplateMonster\LayoutSwitcher\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Api\StoreCookieManagerInterface $storeCookieManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\App\Http\Context $httpContext, \Magento\Framework\Data\Helper\PostHelper $postHelper, \Magento\Framework\Config\Reader\Filesystem $reader, \Magento\Framework\Session\Config\ConfigInterface\Proxy $sessionConfig, \Magento\Framework\App\Helper\Context $context)
    {
        $this->___init();
        parent::__construct($storeCookieManager, $storeManager, $cookieMetadataFactory, $cookieManager, $httpContext, $postHelper, $reader, $sessionConfig, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function getColorSchemes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColorSchemes');
        if (!$pluginInfo) {
            return parent::getColorSchemes();
        } else {
            return $this->___callPlugins('getColorSchemes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultColorScheme($theme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultColorScheme');
        if (!$pluginInfo) {
            return parent::getDefaultColorScheme($theme);
        } else {
            return $this->___callPlugins('getDefaultColorScheme', func_get_args(), $pluginInfo);
        }
    }
}
