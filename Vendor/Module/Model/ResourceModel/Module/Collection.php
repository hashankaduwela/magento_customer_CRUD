<?php
namespace Vendor\Module\Model\ResourceModel\Module;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Vendor\Module\Model\Module',
            'Vendor\Module\Model\ResourceModel\Module'
        );
    }
}
