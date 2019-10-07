<?php
namespace Milople\Personalizedcool\Controller\Adminhtml\Index\Download;

/**
 * Interceptor class for @see \Milople\Personalizedcool\Controller\Adminhtml\Index\Download
 */
class Interceptor extends \Milople\Personalizedcool\Controller\Adminhtml\Index\Download implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Filesystem\Io\File $filesystem, \Magento\Framework\App\Filesystem\DirectoryList $directory_list)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $filesystem, $directory_list);
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
