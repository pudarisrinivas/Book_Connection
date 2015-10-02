<?php 
class Vendor_User_Block_User extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getUser()     
     { 
        if (!$this->hasData('user')) {
            $this->setData('user', Mage::registry('user'));
        }
        return $this->getData('user');
        
    }
}