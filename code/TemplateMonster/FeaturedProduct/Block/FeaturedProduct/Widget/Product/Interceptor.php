<?php
namespace TemplateMonster\FeaturedProduct\Block\FeaturedProduct\Widget\Product;

/**
 * Interceptor class for @see \TemplateMonster\FeaturedProduct\Block\FeaturedProduct\Widget\Product
 */
class Interceptor extends \TemplateMonster\FeaturedProduct\Block\FeaturedProduct\Widget\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magento\Directory\Model\PriceCurrency $priceCurrency, \Magento\Widget\Helper\Conditions $conditionsHelper, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\ProductVideo\Helper\Media $mediaHelper, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory, \Magento\Catalog\Block\Product\Context $context, \TemplateMonster\FeaturedProduct\Model\ProductFactory $productFactory, \Magento\Framework\App\Http\Context $httpContext, array $data = array())
    {
        $this->___init();
        parent::__construct($filterProvider, $priceCurrency, $conditionsHelper, $jsonEncoder, $mediaHelper, $categoryCollectionFactory, $context, $productFactory, $httpContext, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductPriceHtml(\Magento\Catalog\Model\Product $product, $priceType = null, $renderZone = 'item_list', array $arguments = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductPriceHtml');
        if (!$pluginInfo) {
            return parent::getProductPriceHtml($product, $priceType, $renderZone, $arguments);
        } else {
            return $this->___callPlugins('getProductPriceHtml', func_get_args(), $pluginInfo);
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
}
