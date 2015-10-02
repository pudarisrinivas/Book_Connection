<?php
class Vendor_User_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/vendor?id=15 
    	 *  or
    	 * http://site.com/vendor/id/15 	
    	 */
    	/* 
		$vendor_id = $this->getRequest()->getParam('id');

  		if($user_id != null && $user_id != '')	{
			$user = Mage::getModel('user/user')->load($user_id)->getData();
		} else {
			$user = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($user == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$userTable = $resource->getTableName('user');
			
			$select = $read->select()
			   ->from($userTable,array('user_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$user = $read->fetchRow($select);
		}
		Mage::register('user', $user);
		*/

			
		 $this->loadLayout(array('default'));
     $this->renderLayout();
    }
}