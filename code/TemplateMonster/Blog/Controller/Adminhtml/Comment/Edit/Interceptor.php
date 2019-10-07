<?php
namespace TemplateMonster\Blog\Controller\Adminhtml\Comment\Edit;

/**
 * Interceptor class for @see \TemplateMonster\Blog\Controller\Adminhtml\Comment\Edit
 */
class Interceptor extends \TemplateMonster\Blog\Controller\Adminhtml\Comment\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $registry, \TemplateMonster\Blog\Model\CommentFactory $commentFactory)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $registry, $commentFactory);
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
