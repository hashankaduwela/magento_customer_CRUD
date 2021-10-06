<?php
namespace Vendor\Module\Block;

use Magento\Framework\View\Element\Template\Context;
use Vendor\Module\Model\ModuleFactory;
/**
 * Module View block
 */
class ModuleView extends \Magento\Framework\View\Element\Template
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
        $this->pageConfig->getTitle()->set(__('Simple Custom Module View Page'));

        return parent::_prepareLayout();
    }

    public function getSingleData()
    {
        $id = $this->getRequest()->getParam('id');
        $module = $this->_module->create();
        $singleData = $module->load($id);
        return $singleData;
    }
}
