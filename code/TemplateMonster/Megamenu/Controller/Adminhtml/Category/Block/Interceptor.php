<?php
namespace TemplateMonster\Megamenu\Controller\Adminhtml\Category\Block;

/**
 * Interceptor class for @see \TemplateMonster\Megamenu\Controller\Adminhtml\Category\Block
 */
class Interceptor extends \TemplateMonster\Megamenu\Controller\Adminhtml\Category\Block implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Model\Category\Attribute\Source\Page $staticBlocksSource, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \TemplateMonster\Megamenu\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $staticBlocksSource, $resultJsonFactory, $resultRawFactory, $layoutFactory, $helper);
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
