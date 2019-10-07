<?php
namespace Magento\Cms\Model\Page;

/**
 * Interceptor class for @see \Magento\Cms\Model\Page
 */
class Interceptor extends \Magento\Cms\Model\Page implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getMetaTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMetaTitle');
        if (!$pluginInfo) {
            return parent::getMetaTitle();
        } else {
            return $this->___callPlugins('getMetaTitle', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMetaKeywords()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMetaKeywords');
        if (!$pluginInfo) {
            return parent::getMetaKeywords();
        } else {
            return $this->___callPlugins('getMetaKeywords', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMetaDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMetaDescription');
        if (!$pluginInfo) {
            return parent::getMetaDescription();
        } else {
            return $this->___callPlugins('getMetaDescription', func_get_args(), $pluginInfo);
        }
    }
}
