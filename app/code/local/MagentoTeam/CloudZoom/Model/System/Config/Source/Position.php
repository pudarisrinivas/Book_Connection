<?php

// Copyright "Magento Integration Team" - http://magento-team.com

class MagentoTeam_CloudZoom_Model_System_Config_Source_Position
{

	public function toOptionArray()
    	{
        	return array(
            	'right' => Mage::helper('adminhtml')->__('Right'),
            	'left' => Mage::helper('adminhtml')->__('Left'),
            	'top' => Mage::helper('adminhtml')->__('Top'),
            	'bottom' => Mage::helper('adminhtml')->__('Bottom'),
            	'inside' => Mage::helper('adminhtml')->__('Inside')
        	);
    	}
}
