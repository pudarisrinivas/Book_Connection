<?php
class Vendor_User_Model_Mysql4_User extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the vendor_id refers to the key field in your database table.
        $this->_init('user/user', 'vendor_user_id');
    }
}