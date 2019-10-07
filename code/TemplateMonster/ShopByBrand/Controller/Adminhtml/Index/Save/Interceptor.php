<?php
namespace TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\Save;

/**
 * Interceptor class for @see \TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\Save
 */
class Interceptor extends \TemplateMonster\ShopByBrand\Controller\Adminhtml\Index\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\ShopByBrand\Api\Data\BrandInterfaceFactory $brand, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \TemplateMonster\ShopByBrand\Model\BrandRepository $brandRepository, \Magento\Catalog\Model\ImageUploader $imageUploaderLogo, \Magento\Catalog\Model\ImageUploader $imageUploaderBrand, \Magento\Catalog\Model\ImageUploader $imageUploaderProduct, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($brand, $dataPersistor, $brandRepository, $imageUploaderLogo, $imageUploaderBrand, $imageUploaderProduct, $cacheTypeList, $context);
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
