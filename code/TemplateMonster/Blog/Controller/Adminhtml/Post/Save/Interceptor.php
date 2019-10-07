<?php
namespace TemplateMonster\Blog\Controller\Adminhtml\Post\Save;

/**
 * Interceptor class for @see \TemplateMonster\Blog\Controller\Adminhtml\Post\Save
 */
class Interceptor extends \TemplateMonster\Blog\Controller\Adminhtml\Post\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TemplateMonster\Blog\Model\PostFactory $postFactory, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList)
    {
        $this->___init();
        parent::__construct($context, $postFactory, $cacheTypeList);
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
