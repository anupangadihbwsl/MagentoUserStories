<?php
// app/code/Anup/US15/Model/CustomGroupSalesModel.php

namespace Anup\US15\Model;

use Magento\Framework\Model\AbstractModel;

class CustomGroupSalesModel extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Anup\US15\Model\ResourceModel\CustomGroupSalesModel');
    }
}
