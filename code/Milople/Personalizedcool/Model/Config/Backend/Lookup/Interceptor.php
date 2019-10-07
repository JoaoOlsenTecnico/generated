<?php
namespace Milople\Personalizedcool\Model\Config\Backend\Lookup;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Model\Config\Backend\Lookup
 */
class Interceptor extends \Milople\Personalizedcool\Model\Config\Backend\Lookup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Framework\Model\ResourceModel\AbstractResource $resource, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection, \Milople\Personalizedcool\Helper\Data $data_helper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $cacheTypeList, $storeManager, $directoryHelper, $resource, $resourceCollection, $data_helper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save();
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }
}
