<?php
namespace Milople\Personalizedcool\Controller\Index\Popup;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Controller\Index\Popup
 */
class Interceptor extends \Milople\Personalizedcool\Controller\Index\Popup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Filesystem\Io\File $filesystem, \Magento\Framework\App\Filesystem\DirectoryList $directory_list, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Milople\Personalizedcool\Model\AreaFactory $areaFactory, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $filesystem, $directory_list, $resultJsonFactory, $scopeConfig, $areaFactory, $logger);
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
