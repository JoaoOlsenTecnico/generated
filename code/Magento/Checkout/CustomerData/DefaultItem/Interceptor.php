<?php
namespace Magento\Checkout\CustomerData\DefaultItem;

/**
 * Interceptor class for @see \Magento\Checkout\CustomerData\DefaultItem
 */
class Interceptor extends \Magento\Checkout\CustomerData\DefaultItem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Helper\Image $imageHelper, \Magento\Msrp\Helper\Data $msrpHelper, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Catalog\Helper\Product\ConfigurationPool $configurationPool, \Magento\Checkout\Helper\Data $checkoutHelper, \Magento\Framework\Escaper $escaper = null)
    {
        $this->___init();
        parent::__construct($imageHelper, $msrpHelper, $urlBuilder, $configurationPool, $checkoutHelper, $escaper);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemData(\Magento\Quote\Model\Quote\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemData');
        if (!$pluginInfo) {
            return parent::getItemData($item);
        } else {
            return $this->___callPlugins('getItemData', func_get_args(), $pluginInfo);
        }
    }
}
