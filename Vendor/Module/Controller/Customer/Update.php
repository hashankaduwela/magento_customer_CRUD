<?php
namespace Vendor\Module\Controller\Customer;

use Magento\Framework\App\Action\Context;
use Vendor\Module\Model\ModuleFactory;
class Update extends \Magento\Framework\App\Action\Action
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
        $module->setData($data);
        if($module->save()){
            $this->messageManager->addSuccessMessage(__('You Updated the data.'));
        }else{
            $this->messageManager->addErrorMessage(__('Data was not updated.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        //$data['module_id']
        $resultRedirect->setPath('module/customer/index/');
        return $resultRedirect;
    }
}
