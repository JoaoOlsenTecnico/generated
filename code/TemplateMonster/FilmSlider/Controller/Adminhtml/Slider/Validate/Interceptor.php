<?php
namespace TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\Validate;

/**
 * Interceptor class for @see \TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\Validate
 */
class Interceptor extends \TemplateMonster\FilmSlider\Controller\Adminhtml\Slider\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TemplateMonster\FilmSlider\Api\SliderRepositoryInterface $sliderRepository)
    {
        $this->___init();
        parent::__construct($context, $sliderRepository);
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
