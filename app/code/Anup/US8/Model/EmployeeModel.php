<?php

namespace Anup\US8\Model;

use Magento\Framework\Model\AbstractModel;



class EmployeeModel extends AbstractModel
{
    protected $objectManager;
    protected $_eventPrefix = 'anup_us8_employee';
    protected $_eventObject = 'employee';

    /**
     * Standard model initialization
     *
     * @param string $resourceModel
     * @return void
     */
    protected function _construct()
    {
        $this->_init("Anup\US8\Model\ResourceModel\EmployeeModel");
    }
}