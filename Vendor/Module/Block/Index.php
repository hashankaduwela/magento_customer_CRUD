<?php
namespace Vendor\Module\Block;

use Magento\Framework\View\Element\Template\Context;
use Vendor\Module\Model\ModuleFactory;
/**
 * Test List block
 */
class Index extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        Context $context,
        ModuleFactory $module
    ) {
        $this->_module = $module;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Simple Custom Module List Page'));

        return parent::_prepareLayout();
    }

    public function getTestCollection()
    {
        $module = $this->_module->create();
        $collection = $module->getCollection();
        return $collection;
    }
}
