<?php
namespace Zemez\Amp\Block\Page\Head\Tm\Product;

/**
 * Interceptor class for @see \Zemez\Amp\Block\Page\Head\Tm\Product
 */
class Interceptor extends \Zemez\Amp\Block\Page\Head\Tm\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Zemez\Amp\Helper\Data $helper, \Magento\Catalog\Helper\Product $productHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $helper, $productHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function displayProductStockStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'displayProductStockStatus');
        if (!$pluginInfo) {
            return parent::displayProductStockStatus();
        } else {
            return $this->___callPlugins('displayProductStockStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
    }
}
