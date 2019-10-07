<?php
namespace TemplateMonster\Blog\Controller\Adminhtml\Post\MassHide;

/**
 * Interceptor class for @see \TemplateMonster\Blog\Controller\Adminhtml\Post\MassHide
 */
class Interceptor extends \TemplateMonster\Blog\Controller\Adminhtml\Post\MassHide implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \TemplateMonster\Blog\Model\ResourceModel\Post\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $cacheTypeList, $collectionFactory);
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
