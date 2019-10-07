<?php
namespace Magento\Store\Model\StoreResolver\ReaderList;

/**
 * Interceptor class for @see \Magento\Store\Model\StoreResolver\ReaderList
 */
class Interceptor extends \Magento\Store\Model\StoreResolver\ReaderList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $resolverMap = array('website' => 'Magento\\Store\\Model\\StoreResolver\\Website', 'group' => 'Magento\\Store\\Model\\StoreResolver\\Group', 'store' => 'Magento\\Store\\Model\\StoreResolver\\Store'))
    {
        $this->___init();
        parent::__construct($objectManager, $resolverMap);
    }

    /**
     * {@inheritdoc}
     */
    public function getReader($runMode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReader');
        if (!$pluginInfo) {
            return parent::getReader($runMode);
        } else {
            return $this->___callPlugins('getReader', func_get_args(), $pluginInfo);
        }
    }
}
