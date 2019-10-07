<?php
namespace TemplateMonster\Blog\Controller\Adminhtml\Category\Save;

/**
 * Interceptor class for @see \TemplateMonster\Blog\Controller\Adminhtml\Category\Save
 */
class Interceptor extends \TemplateMonster\Blog\Controller\Adminhtml\Category\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TemplateMonster\Blog\Model\CategoryFactory $categoryFactory)
    {
        $this->___init();
        parent::__construct($context, $categoryFactory);
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
