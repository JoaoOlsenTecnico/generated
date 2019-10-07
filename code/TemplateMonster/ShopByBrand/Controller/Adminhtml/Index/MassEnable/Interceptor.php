<?php
namespace TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\MassEnable;

/**
 * Interceptor class for @see \TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\MassEnable
 */
class Interceptor extends \TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\MassEnable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Ui\Component\MassAction\Filter $filter, \TemplateMonster\ShopByBrand\Model\ResourceModel\Brand\CollectionFactory $collectionFactory, \TemplateMonster\ShopByBrand\Model\BrandRepository $brandRepository, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($filter, $collectionFactory, $brandRepository, $cacheTypeList, $context);
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
