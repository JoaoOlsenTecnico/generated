<?php
namespace TemplateMonster\LayoutSwitcher\Controller\Index\Reset;

/**
 * Interceptor class for @see \TemplateMonster\LayoutSwitcher\Controller\Index\Reset
 */
class Interceptor extends \TemplateMonster\LayoutSwitcher\Controller\Index\Reset implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\LayoutSwitcher\Helper\Data $helper, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($helper, $formKeyValidator, $context);
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
