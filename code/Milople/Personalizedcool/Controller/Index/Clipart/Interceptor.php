<?php
namespace Milople\Personalizedcool\Controller\Index\Clipart;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Controller\Index\Clipart
 */
class Interceptor extends \Milople\Personalizedcool\Controller\Index\Clipart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Filesystem\Io\File $filesystem, \Magento\Framework\App\Filesystem\DirectoryList $directory_list, \Milople\Personalizedcool\Helper\Product\View\Personalized $helperPersonalized, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $filesystem, $directory_list, $helperPersonalized, $resultJsonFactory, $logger);
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
