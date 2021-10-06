<?php
namespace Vendor\Module\Model;
use Magento\Framework\Model\AbstractModel;
class Module extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Vendor\Module\Model\ResourceModel\Module');
    }
}
