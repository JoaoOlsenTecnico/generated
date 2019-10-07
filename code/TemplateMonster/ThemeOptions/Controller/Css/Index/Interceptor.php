<?php
namespace TemplateMonster\ThemeOptions\Controller\Css\Index;

/**
 * Interceptor class for @see \TemplateMonster\ThemeOptions\Controller\Css\Index
 */
class Interceptor extends \TemplateMonster\ThemeOptions\Controller\Css\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\LayoutInterface $layout, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($layout, $context);
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
