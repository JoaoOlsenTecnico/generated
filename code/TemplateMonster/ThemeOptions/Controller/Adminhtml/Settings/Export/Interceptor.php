<?php
namespace TemplateMonster\ThemeOptions\Controller\Adminhtml\Settings\Export;

/**
 * Interceptor class for @see \TemplateMonster\ThemeOptions\Controller\Adminhtml\Settings\Export
 */
class Interceptor extends \TemplateMonster\ThemeOptions\Controller\Adminhtml\Settings\Export implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TemplateMonster\ThemeOptions\Model\Export\SettingsFactory $settingsFactory, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\ImportExport\Model\Export\Adapter\AbstractAdapter $writer)
    {
        $this->___init();
        parent::__construct($context, $settingsFactory, $fileFactory, $writer);
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
