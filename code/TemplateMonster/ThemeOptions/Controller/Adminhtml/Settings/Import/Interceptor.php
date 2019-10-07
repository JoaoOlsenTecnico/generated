<?php
namespace TemplateMonster\ThemeOptions\Controller\Adminhtml\Settings\Import;

/**
 * Interceptor class for @see \TemplateMonster\ThemeOptions\Controller\Adminhtml\Settings\Import
 */
class Interceptor extends \TemplateMonster\ThemeOptions\Controller\Adminhtml\Settings\Import implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ImportExport\Model\ImportFactory $importFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($importFactory, $filesystem, $context);
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
