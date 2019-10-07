<?php
namespace TemplateMonster\Blog\Controller\Adminhtml\Post\RelatedCommentsHide;

/**
 * Interceptor class for @see \TemplateMonster\Blog\Controller\Adminhtml\Post\RelatedCommentsHide
 */
class Interceptor extends \TemplateMonster\Blog\Controller\Adminhtml\Post\RelatedCommentsHide implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TemplateMonster\Blog\Model\ResourceModel\Comment\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $collectionFactory);
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
