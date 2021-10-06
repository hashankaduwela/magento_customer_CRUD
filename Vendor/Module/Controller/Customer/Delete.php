<?php
namespace Vendor\Module\Controller\Customer;

use Magento\Framework\App\Action\Context;
use Vendor\Module\Model\ModuleFactory;
class Delete extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Module
     */
    protected $_module;

    public function __construct(
        Context $context,
        ModuleFactory $module
    ) {
        $this->_module = $module;
        parent::__construct($context);
    }
    public function execute()
    {
        $data = $this->getRequest()->getParams();
        $module = $this->_module->create();
        //  $module->setData($data);
        $id = $this->getRequest()->getParams('id');

        $module->load($id);
        if($module->delete()){
            $this->messageManager->addSuccessMessage(__('You Deleted the data.'));
        }else{
            $this->messageManager->addErrorMessage(__('Data was not deleted.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        //$data['module_id']
        $resultRedirect->setPath('module/customer/index/');
        return $resultRedirect;
    }
}
