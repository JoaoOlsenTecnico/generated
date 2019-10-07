<?php
namespace Milople\Personalizedcool\Controller\Adminhtml\Category\Save;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Controller\Adminhtml\Category\Save
 */
class Interceptor extends \Milople\Personalizedcool\Controller\Adminhtml\Category\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Milople\Personalizedcool\Api\CategoryRepositoryInterface $categoryRepository, \Milople\Personalizedcool\Api\Data\CategoryInterfaceFactory $categoryFactory, \Magento\Backend\Helper\Js $jsHelper)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $categoryRepository, $categoryFactory, $jsHelper);
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
