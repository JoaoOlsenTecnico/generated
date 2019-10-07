<?php
namespace TemplateMonster\Blog\Controller\Post\SaveComment;

/**
 * Interceptor class for @see \TemplateMonster\Blog\Controller\Post\SaveComment
 */
class Interceptor extends \TemplateMonster\Blog\Controller\Post\SaveComment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \TemplateMonster\Blog\Model\CommentFactory $commentFactory, \TemplateMonster\Blog\Model\PostFactory $postFactory, \TemplateMonster\Blog\Model\Url $url, \TemplateMonster\Blog\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $commentFactory, $postFactory, $url, $helper);
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
