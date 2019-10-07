<?php
namespace TemplateMonster\Blog\Controller\Adminhtml\Category\RelatedPostsGrid;

/**
 * Interceptor class for @see \TemplateMonster\Blog\Controller\Adminhtml\Category\RelatedPostsGrid
 */
class Interceptor extends \TemplateMonster\Blog\Controller\Adminhtml\Category\RelatedPostsGrid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $resultLayoutFactory, $registry);
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
