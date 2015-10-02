<?php
	
class MagentoTeam_CloudZoom_Block_Product_View_Media extends Mage_Catalog_Block_Product_View_Media
{
    protected function _beforeToHtml(){
    	if(intval(Mage::getStoreConfig('magentoteam_cloudzoom/general/enable'))){
    		$this->setTemplate('magento-team/cloud-zoom/catalog/product/view/media.phtml');
    	}
    	return parent::_beforeToHtml();
    }
    protected function _afterToHtml($html){
    	
    	$html .= '';
    	
    	return parent::_afterToHtml($html);
    }
}