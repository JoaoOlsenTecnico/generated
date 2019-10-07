<?php
namespace Milople\Personalizedcool\Controller\Adminhtml\Fonts\MassDisabled;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Controller\Adminhtml\Fonts\MassDisabled
 */
class Interceptor extends \Milople\Personalizedcool\Controller\Adminhtml\Fonts\MassDisabled implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Milople\Personalizedcool\Model\ResourceModel\Fonts\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory);
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
