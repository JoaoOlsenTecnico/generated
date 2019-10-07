<?php
namespace Milople\Personalizedcool\Block\Product\ListProduct;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Block\Product\ListProduct
 */
class Interceptor extends \Milople\Personalizedcool\Block\Product\ListProduct implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Framework\Url\Helper\Data $urlHelper, \Milople\Personalizedcool\Helper\Product\View\Personalized $personalized_helper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $postDataHelper, $layerResolver, $categoryRepository, $urlHelper, $personalized_helper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductDetailsHtml(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductDetailsHtml');
        if (!$pluginInfo) {
            return parent::getProductDetailsHtml($product);
        } else {
            return $this->___callPlugins('getProductDetailsHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReviewsSummaryHtml(\Magento\Catalog\Model\Product $product, $templateType = false, $displayIfNoReviews = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReviewsSummaryHtml');
        if (!$pluginInfo) {
            return parent::getReviewsSummaryHtml($product, $templateType, $displayIfNoReviews);
        } else {
            return $this->___callPlugins('getReviewsSummaryHtml', func_get_args(), $pluginInfo);
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
