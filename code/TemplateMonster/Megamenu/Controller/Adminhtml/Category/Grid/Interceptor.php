<?php
namespace TemplateMonster\Megamenu\Controller\Adminhtml\Category\Grid;

/**
 * Interceptor class for @see \TemplateMonster\Megamenu\Controller\Adminhtml\Category\Grid
 */
class Interceptor extends \TemplateMonster\Megamenu\Controller\Adminhtml\Category\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \TemplateMonster\Megamenu\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $resultRawFactory, $layoutFactory, $helper);
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
