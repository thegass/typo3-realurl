<?php

/*********************************************************************
* Extension configuration file for ext "realurl".
*
* Generated by ext 27-09-2016 12:03 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Speaking URLs for TYPO3',
  'description' => 'Makes TYPO3 URLs search engine friendly. Donations are welcome to dmitry.dulepov@gmail.com. They help to support the extension!',
  'category' => 'services',
  'version' => '2.1.4',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'modify_tables' => 'pages,pages_language_overlay',
  'clearcacheonload' => 1,
  'author' => 'Dmitry Dulepov',
  'author_email' => 'dmitry.dulepov@gmail.com',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.0-8.4.999',
      'php' => '5.4.0-7.0.999',
      'scheduler' => '6.2.0-8.4.999',
    ),
    'conflicts' => 
    array (
      'cooluri' => '',
      'simulatestatic' => '',
    ),
    'suggests' => 
    array (
      'static_info_tables' => '6.2.0-',
    ),
  ),
  'comment' => 'WARNING! Run the update script in the EM followed by the database update! // Useful tips: https://github.com/dmitryd/typo3-realurl/wiki/Notes-for-Integrators',
  'user' => 'dmitry',
);

?>