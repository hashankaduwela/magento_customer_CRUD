<?php
namespace Vendor\Module\Model\ResourceModel;
class Module extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('vendor_module', 'module_id');   //here "Vendor_Module" is table name and "module_id" is the primary key of custom table
    }
}
