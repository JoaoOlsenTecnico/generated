<?php
namespace Milople\Personalizedcool\Controller\Adminhtml\Fonts\Edit;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Controller\Adminhtml\Fonts\Edit
 */
class Interceptor extends \Milople\Personalizedcool\Controller\Adminhtml\Fonts\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $registry, \Milople\Personalizedcool\Model\Fonts $model)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $registry, $model);
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
