<?php
namespace TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\InlineEdit;

/**
 * Interceptor class for @see \TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\InlineEdit
 */
class Interceptor extends \TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TemplateMonster\FilmSlider\Api\SliderRepositoryInterface $sliderRepository, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($context, $sliderRepository, $jsonFactory);
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
