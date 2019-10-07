<?php
namespace Milople\Personalizedcool\Controller\Adminhtml\Category\NewAction;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Controller\Adminhtml\Category\NewAction
 */
class Interceptor extends \Milople\Personalizedcool\Controller\Adminhtml\Category\NewAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Milople\Personalizedcool\Api\CategoryRepositoryInterface $categoryRepository, \Milople\Personalizedcool\Api\Data\CategoryInterfaceFactory $categoryFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $categoryRepository, $categoryFactory);
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
