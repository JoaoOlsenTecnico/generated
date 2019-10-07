<?php
namespace TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\GridSold;

/**
 * Interceptor class for @see \TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\GridSold
 */
class Interceptor extends \TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\GridSold implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \TemplateMonster\ShopByBrand\Api\BrandRepositoryInterface $brandRepository, \TemplateMonster\ShopByBrand\Api\Data\BrandInterfaceFactory $brandFactory, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $resultRawFactory, $layoutFactory, $brandRepository, $brandFactory, $registry);
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
