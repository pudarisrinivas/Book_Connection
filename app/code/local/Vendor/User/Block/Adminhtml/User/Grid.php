<?php
class Vendor_User_Block_Adminhtml_User_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('userGrid');
      $this->setDefaultSort('user_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
      $collection = Mage::getModel('user/user')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
	  
	  $this->addColumn('vendor_user_id', array(
          'header'    => Mage::helper('user')->__('ID'),
          'align'     =>'right',
          'width'     => '100px',
          'index'     => 'vendor_user_id',
      ));
	  $this->addColumn('firstname', array(
          'header'    => Mage::helper('user')->__('First Name'),
          'align'     =>'left',
		  'width'     => '200px',
          'index'     => 'firstname',
      ));
	  $this->addColumn('lastname', array(
          'header'    => Mage::helper('user')->__('Last Name'),
          'align'     =>'left',
		  'width'     => '200px',
          'index'     => 'lastname',
      ));
	  $this->addColumn('emailid', array(
          'header'    => Mage::helper('user')->__('Email'),
          'align'     =>'left',
		  'width'     => '220px',
          'index'     => 'emailid',
      ));
	  $this->addColumn('status', array(
          'header'    => Mage::helper('user')->__('Status'),
          'align'     => 'left',
          'width'     => '100px',
          'index'     => 'status',
          'type'      => 'options',
          'options'   => array(
              1 => 'Enabled',
              2 => 'Disabled',
          ),
      ));
	 
		//$this->addColumn('action',
//			array(
//				'header'    =>  Mage::helper('user')->__('Action'),
//				'width'     => '100',
//				'type'      => 'action',
//				'getter'    => 'getId',
//				'actions'   => array(
//					array(
//						'caption'   => Mage::helper('user')->__('Edit'),
//						'url'       => array('base'=> '*/*/edit'),
//						'field'     => 'id'
//					)
//				),
//				'filter'    => false,
//				'sortable'  => false,
//				'index'     => 'stores',
//				'is_system' => true,
//		));
		
		$this->addExportType('*/*/exportCsv', Mage::helper('user')->__('CSV'));
		$this->addExportType('*/*/exportXml', Mage::helper('user')->__('XML'));
	  
      return parent::_prepareColumns();
  }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('vendor_user_id');
        $this->getMassactionBlock()->setFormFieldName('user');

        $this->getMassactionBlock()->addItem('delete', array(
             'label'    => Mage::helper('user')->__('Delete'),
             'url'      => $this->getUrl('*/*/massDelete'),
             'confirm'  => Mage::helper('user')->__('Are you sure?')
        ));

        $statuses = Mage::getSingleton('user/status')->getOptionArray();

        array_unshift($statuses, array('label'=>'', 'value'=>''));
//-------------- Start Status Code ---------------
			$this->getMassactionBlock()->addItem('status', array(
             'label'=> Mage::helper('user')->__('Change status'),
             'url'  => $this->getUrl('*/*/massStatus', array('_current'=>true)),
             'additional' => array(
                    'visibility' => array(
                         'name' => 'status',
                         'type' => 'select',
                         'class' => 'required-entry',
                         'label' => Mage::helper('user')->__('Status'),
                         'values' => $statuses
                     )
             )
        ));
//-------------- END Status Code ---------------
        return $this;
    }

  public function getRowUrl($row)
  {
      //return $this->getUrl('*/*/edit', array('id' => $row->getId()));
	  //return "";
  }

}