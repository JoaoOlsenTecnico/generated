<?php
namespace Milople\Personalizedcool\Controller\Adminhtml\Image\Save;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Controller\Adminhtml\Image\Save
 */
class Interceptor extends \Milople\Personalizedcool\Controller\Adminhtml\Image\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\MediaStorage\Model\File\UploaderFactory $fileUploaderFactory, \Milople\Personalizedcool\Api\ImageRepositoryInterface $imageRepository, \Milople\Personalizedcool\Api\Data\ImageInterfaceFactory $imageFactory, \Magento\Framework\File\UploaderFactory $uploaderFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Filesystem $filesystem)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $fileUploaderFactory, $imageRepository, $imageFactory, $uploaderFactory, $logger, $filesystem);
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
