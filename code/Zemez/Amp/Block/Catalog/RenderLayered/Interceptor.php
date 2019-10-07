<?php
namespace Zemez\Amp\Block\Catalog\RenderLayered;

/**
 * Interceptor class for @see \Zemez\Amp\Block\Catalog\RenderLayered
 */
class Interceptor extends \Zemez\Amp\Block\Catalog\RenderLayered implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Eav\Model\Entity\Attribute $eavAttribute, \Magento\Catalog\Model\ResourceModel\Layer\Filter\AttributeFactory $layerAttribute, \Magento\Swatches\Helper\Data $swatchHelper, \Magento\Swatches\Helper\Media $mediaHelper, \Zemez\Amp\Helper\Data $dataHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $eavAttribute, $layerAttribute, $swatchHelper, $mediaHelper, $dataHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplate');
        if (!$pluginInfo) {
            return parent::getTemplate();
        } else {
            return $this->___callPlugins('getTemplate', func_get_args(), $pluginInfo);
        }
    }
}
