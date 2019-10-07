<?php
namespace TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\MassEnable;

/**
 * Interceptor class for @see \TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\MassEnable
 */
class Interceptor extends \TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\MassEnable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \TemplateMonster\FilmSlider\Model\ResourceModel\Slider\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory);
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
