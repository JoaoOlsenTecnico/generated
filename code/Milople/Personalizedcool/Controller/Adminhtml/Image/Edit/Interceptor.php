<?php
namespace Milople\Personalizedcool\Controller\Adminhtml\Image\Edit;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Controller\Adminhtml\Image\Edit
 */
class Interceptor extends \Milople\Personalizedcool\Controller\Adminhtml\Image\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Milople\Personalizedcool\Api\ImageRepositoryInterface $imageRepository, \Milople\Personalizedcool\Api\Data\ImageInterfaceFactory $imageFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $imageRepository, $imageFactory);
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
