<?php
namespace TemplateMonster\Blog\Controller\Adminhtml\Comment\MassShow;

/**
 * Interceptor class for @see \TemplateMonster\Blog\Controller\Adminhtml\Comment\MassShow
 */
class Interceptor extends \TemplateMonster\Blog\Controller\Adminhtml\Comment\MassShow implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \TemplateMonster\Blog\Model\ResourceModel\Comment\CollectionFactory $collectionFactory, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $cacheTypeList);
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
