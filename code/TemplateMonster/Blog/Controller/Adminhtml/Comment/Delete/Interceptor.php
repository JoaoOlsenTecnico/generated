<?php
namespace TemplateMonster\Blog\Controller\Adminhtml\Comment\Delete;

/**
 * Interceptor class for @see \TemplateMonster\Blog\Controller\Adminhtml\Comment\Delete
 */
class Interceptor extends \TemplateMonster\Blog\Controller\Adminhtml\Comment\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TemplateMonster\Blog\Model\CommentFactory $commentFactory)
    {
        $this->___init();
        parent::__construct($context, $commentFactory);
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
