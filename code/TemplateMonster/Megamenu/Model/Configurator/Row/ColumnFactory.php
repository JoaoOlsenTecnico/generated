<?php
namespace TemplateMonster\Megamenu\Model\Configurator\Row;

/**
 * Factory class for @see \TemplateMonster\Megamenu\Model\Configurator\Row\Column
 */
class ColumnFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\TemplateMonster\\Megamenu\\Model\\Configurator\\Row\\Column')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \TemplateMonster\Megamenu\Model\Configurator\Row\Column
     */
    public function create(array $data = array())
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
