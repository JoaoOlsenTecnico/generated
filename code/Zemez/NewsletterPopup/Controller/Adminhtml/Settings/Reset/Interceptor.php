<?php
namespace Zemez\NewsletterPopup\Controller\Adminhtml\Settings\Reset;

/**
 * Interceptor class for @see \Zemez\NewsletterPopup\Controller\Adminhtml\Settings\Reset
 */
class Interceptor extends \Zemez\NewsletterPopup\Controller\Adminhtml\Settings\Reset implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Zemez\NewsletterPopup\Model\ResourceModel\Config\Data $configDataResource, \Magento\Framework\App\Config\ReinitableConfigInterface $config)
    {
        $this->___init();
        parent::__construct($context, $configDataResource, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
