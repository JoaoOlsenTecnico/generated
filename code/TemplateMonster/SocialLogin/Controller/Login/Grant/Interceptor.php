<?php
namespace TemplateMonster\SocialLogin\Controller\Login\Grant;

/**
 * Interceptor class for @see \TemplateMonster\SocialLogin\Controller\Login\Grant
 */
class Interceptor extends \TemplateMonster\SocialLogin\Controller\Login\Grant implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\SocialLogin\Model\ResourceModel\Provider\Collection $collection, \TemplateMonster\SocialLogin\Helper\Data $socialLoginHelper, \TemplateMonster\SocialLogin\Model\AccountManagement $accountManagement, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($collection, $socialLoginHelper, $accountManagement, $customerSession, $context);
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
