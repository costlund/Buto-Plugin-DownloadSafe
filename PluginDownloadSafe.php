<?php
class PluginDownloadSafe{
  public function page_safe(){
    $this->widget_safe();
  }
  public function widget_safe(){
    /**
     * File
     */
    $file = wfUser::getSession()->get('plugin/download/safe/file');
    $file = wfSettings::replaceDir($file);
    /**
     * Content type
     */
    $content_type = mime_content_type($file);
    /**
     * Header
     */
    header('Content-Type: '.$content_type);
    header("Content-Transfer-Encoding: Binary"); 
    header("Content-disposition: attachment; filename=\"" . basename($file) . "\""); 
    /**
     * Read file
     */
    readfile($file);
  }
}
