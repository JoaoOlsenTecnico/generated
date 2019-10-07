<?php
namespace Milople\Personalizedcool\Controller\Index\Load;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Controller\Index\Load
 */
class Interceptor extends \Milople\Personalizedcool\Controller\Index\Load implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Filesystem\Io\File $filesystem, \Magento\Catalog\Model\ProductFactory $productModelFactory, \Magento\Framework\App\Filesystem\DirectoryList $directory_list, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Swatches\Helper\Data $swatchHelper, \Magento\Catalog\Helper\Image $imageHelper, \Milople\Personalizedcool\Helper\Product\View\Personalized $personalizedHelper, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $filesystem, $productModelFactory, $directory_list, $resultJsonFactory, $scopeConfig, $swatchHelper, $imageHelper, $personalizedHelper, $logger);
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
