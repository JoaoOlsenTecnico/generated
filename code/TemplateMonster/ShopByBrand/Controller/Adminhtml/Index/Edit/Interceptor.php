<?php
namespace TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\Edit;

/**
 * Interceptor class for @see \TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\Edit
 */
class Interceptor extends \TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\ShopByBrand\Api\BrandRepositoryInterface $brandRepository, \Magento\Framework\Registry $coreRegistry, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($brandRepository, $coreRegistry, $context);
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
