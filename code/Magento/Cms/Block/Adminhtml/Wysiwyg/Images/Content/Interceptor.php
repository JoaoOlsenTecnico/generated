<?php
namespace Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content;

/**
 * Interceptor class for @see \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content
 */
class Interceptor extends \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getFilebrowserSetupObject()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilebrowserSetupObject');
        if (!$pluginInfo) {
            return parent::getFilebrowserSetupObject();
        } else {
            return $this->___callPlugins('getFilebrowserSetupObject', func_get_args(), $pluginInfo);
        }
    }
}
