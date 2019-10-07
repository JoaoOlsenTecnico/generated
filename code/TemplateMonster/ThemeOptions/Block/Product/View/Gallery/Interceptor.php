<?php
namespace TemplateMonster\ThemeOptions\Block\Product\View\Gallery;

/**
 * Interceptor class for @see \TemplateMonster\ThemeOptions\Block\Product\View\Gallery
 */
class Interceptor extends \TemplateMonster\ThemeOptions\Block\Product\View\Gallery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \TemplateMonster\ThemeOptions\Helper\Data $helper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $arrayUtils, $jsonEncoder, $helper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getMagnifier()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMagnifier');
        if (!$pluginInfo) {
            return parent::getMagnifier();
        } else {
            return $this->___callPlugins('getMagnifier', func_get_args(), $pluginInfo);
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
