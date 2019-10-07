<?php
namespace TemplateMonster\Blog\Controller\Adminhtml\Post\InlineEdit;

/**
 * Interceptor class for @see \TemplateMonster\Blog\Controller\Adminhtml\Post\InlineEdit
 */
class Interceptor extends \TemplateMonster\Blog\Controller\Adminhtml\Post\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \TemplateMonster\Blog\Model\PostFactory $postFactory)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $cacheTypeList, $postFactory);
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
