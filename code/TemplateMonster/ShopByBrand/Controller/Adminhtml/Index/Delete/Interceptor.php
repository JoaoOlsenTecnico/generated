<?php
namespace TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\Delete;

/**
 * Interceptor class for @see \TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\Delete
 */
class Interceptor extends \TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\ShopByBrand\Api\BrandRepositoryInterface $brandRepository, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($brandRepository, $context);
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
