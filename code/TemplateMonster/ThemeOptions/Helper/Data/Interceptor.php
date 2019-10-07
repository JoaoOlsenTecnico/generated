<?php
namespace TemplateMonster\ThemeOptions\Helper\Data;

/**
 * Interceptor class for @see \TemplateMonster\ThemeOptions\Helper\Data
 */
class Interceptor extends \TemplateMonster\ThemeOptions\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\ThemeOptions\Helper\ColorScheme $colorScheme, \Magento\Framework\App\Helper\Context $context, \Magento\Framework\Serialize\Serializer\Json $serialize, \Magento\Catalog\Block\Product\ProductList\Toolbar $_toolbar)
    {
        $this->___init();
        parent::__construct($colorScheme, $context, $serialize, $_toolbar);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentColorScheme($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentColorScheme');
        if (!$pluginInfo) {
            return parent::getCurrentColorScheme($store);
        } else {
            return $this->___callPlugins('getCurrentColorScheme', func_get_args(), $pluginInfo);
        }
    }
}
