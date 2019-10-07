<?php
namespace TemplateMonster\ShopByBrand\Controller\Brand\View;

/**
 * Interceptor class for @see \TemplateMonster\ShopByBrand\Controller\Brand\View
 */
class Interceptor extends \TemplateMonster\ShopByBrand\Controller\Brand\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\ShopByBrand\Helper\Data $helper, \Magento\Framework\Registry $coreRegistry, \TemplateMonster\ShopByBrand\Api\BrandRepositoryInterface $brandRepository, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($helper, $coreRegistry, $brandRepository, $context);
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
