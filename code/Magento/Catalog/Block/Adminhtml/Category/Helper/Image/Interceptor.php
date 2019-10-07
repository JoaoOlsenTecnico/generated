<?php
namespace Magento\Catalog\Block\Adminhtml\Category\Helper\Image;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Category\Helper\Image
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Category\Helper\Image implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Form\Element\Factory $factoryElement, \Magento\Framework\Data\Form\Element\CollectionFactory $factoryCollection, \Magento\Framework\Escaper $escaper, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Store\Model\StoreManagerInterface $storeManager, $data = array())
    {
        $this->___init();
        parent::__construct($factoryElement, $factoryCollection, $escaper, $urlBuilder, $storeManager, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementHtml');
        if (!$pluginInfo) {
            return parent::getElementHtml();
        } else {
            return $this->___callPlugins('getElementHtml', func_get_args(), $pluginInfo);
        }
    }
}
