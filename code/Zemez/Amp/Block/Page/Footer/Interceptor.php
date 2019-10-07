<?php
namespace Zemez\Amp\Block\Page\Footer;

/**
 * Interceptor class for @see \Zemez\Amp\Block\Page\Footer
 */
class Interceptor extends \Zemez\Amp\Block\Page\Footer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Zemez\Amp\Helper\Data $dataHelper, \Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Http\Context $httpContext, array $data = array())
    {
        $this->___init();
        parent::__construct($dataHelper, $context, $httpContext, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getCopyright()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCopyright');
        if (!$pluginInfo) {
            return parent::getCopyright();
        } else {
            return $this->___callPlugins('getCopyright', func_get_args(), $pluginInfo);
        }
    }
}
