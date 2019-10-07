<?php
namespace TemplateMonster\Megamenu\Model\Attribute\Backend\Configurator;

/**
 * Interceptor class for @see \TemplateMonster\Megamenu\Model\Attribute\Backend\Configurator
 */
class Interceptor extends \TemplateMonster\Megamenu\Model\Attribute\Backend\Configurator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($object);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }
}
