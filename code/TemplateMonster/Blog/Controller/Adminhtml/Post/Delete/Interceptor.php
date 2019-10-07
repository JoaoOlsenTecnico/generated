<?php
namespace TemplateMonster\Blog\Controller\Adminhtml\Post\Delete;

/**
 * Interceptor class for @see \TemplateMonster\Blog\Controller\Adminhtml\Post\Delete
 */
class Interceptor extends \TemplateMonster\Blog\Controller\Adminhtml\Post\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TemplateMonster\Blog\Model\PostFactory $postFactory)
    {
        $this->___init();
        parent::__construct($context, $postFactory);
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
