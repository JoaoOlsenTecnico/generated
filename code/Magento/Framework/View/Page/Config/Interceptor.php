<?php
namespace Magento\Framework\View\Page\Config;

/**
 * Interceptor class for @see \Magento\Framework\View\Page\Config
 */
class Interceptor extends \Magento\Framework\View\Page\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\View\Asset\GroupedCollection $pageAssets, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\View\Page\FaviconInterface $favicon, \Magento\Framework\View\Page\Title $title, \Magento\Framework\Locale\ResolverInterface $localeResolver, $isIncludesAvailable = true)
    {
        $this->___init();
        parent::__construct($assetRepo, $pageAssets, $scopeConfig, $favicon, $title, $localeResolver, $isIncludesAvailable);
    }

    /**
     * {@inheritdoc}
     */
    public function getAssetCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAssetCollection');
        if (!$pluginInfo) {
            return parent::getAssetCollection();
        } else {
            return $this->___callPlugins('getAssetCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getElementAttributes($elementType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementAttributes');
        if (!$pluginInfo) {
            return parent::getElementAttributes($elementType);
        } else {
            return $this->___callPlugins('getElementAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIncludes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIncludes');
        if (!$pluginInfo) {
            return parent::getIncludes();
        } else {
            return $this->___callPlugins('getIncludes', func_get_args(), $pluginInfo);
        }
    }
}
