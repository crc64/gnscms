<?php
/**  
 *  $Id: rpc.php v1.0 2013-01-01 maestro $
 *
 *  gnsCMS, A Truly Simple Yet Powerful Content Management System
 *  http://www.gnscms.com/
 *
 *  Copyright (c) 2013 gnsPLANET, LLC
 *
 *  @author     gnsCMS Team :: 3G Development
 *  @copyright  (c) 2013 gnsPLANET, LLC
 *  @license    http://www.gnscms.com/license.html
 */
  // include the core functionality
  require_once('inc/top.php');

  // set the action from the url
  $action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
  
  // set the content status to enabled
  if ($action == 'enableContent') {
    $content = new Content;
    $content->storeFormValues($_GET);
    $content->updateStatus(); 
  }
  
  // set the content status to disabled
  if ($action == 'disableContent') {
    $content = new Content;
    $content->storeFormValues($_GET);
    $content->updateStatus(); 
  }
  
  // delete the content
  if ($action == 'deleteContent') {
    $content = new Content;
    $content->storeFormValues($_GET);
    $content->delete(); 
  }     
?>