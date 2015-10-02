<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('vendor_user')};
CREATE TABLE {$this->getTable('vendor_user')} (
   `vendor_user_id` int(11) unsigned NOT NULL auto_increment,
   `firstname` varchar(250) NOT NULL default '',
   `lastname` varchar(250) NOT NULL default '',
   `emailid` varchar(250) NOT NULL default '',
   `password` varchar(250) NOT NULL default '',
   `confirmpassword` varchar(250) NOT NULL default '',
   `status` smallint(6) NOT NULL default '0',
   `created_time` datetime NULL,
   `update_time` datetime NULL,
PRIMARY KEY (`vendor_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");

$installer->endSetup(); 