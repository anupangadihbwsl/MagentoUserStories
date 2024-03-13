<?php

namespace Anup\US8\Model\ResourceModel\EmployeeModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init("Anup\US8\Model\EmployeeModel","Anup\US8\Model\ResourceModel\EmployeeModel");
    }
}