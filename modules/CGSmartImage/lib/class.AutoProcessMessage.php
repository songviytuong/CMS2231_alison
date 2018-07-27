<?php

namespace CGSmartImage;

final class AutoProcessMessage extends \CGMessageQueue\MessageBase
{
    private $_files;

    public function __construct($files)
    {
        parent::__construct();
        $this->set_module('CGSmartImage');
        $this->set_queue('CGSmartImage');
        $this->_files = $files;
    }

    protected function &get_prefs()
    {
        static $_prefs;
        if( !$_prefs ) $_prefs = autoprocess_options::load();
        return $_prefs;
    }

    protected function autoconvert_file($filename)
    {
        try {
            debug_to_log(__METHOD__);
            if( !is_file($filename) ) throw new \Exception('File not found');
            debug_to_log('test0 '.$filename);
            if( !is_writable($filename) ) throw new \Exception('File not writable');
            $prefs = $this->get_prefs();
            debug_to_log('test1 '.$filename);
            if( !$prefs->is_file_scannable($filename) ) return;

            $sizeinfo = getimagesize($filename);
            debug_to_log($sizeinfo);
            if( !is_array($sizeinfo) || count($sizeinfo) < 2 ) throw new \Exception('Problem getting image details');
            if( $sizeinfo[0] <= $prefs->max_size && $sizeinfo[1] <= $prefs->max_size) return; // nothing to do.

            $opts = array();
            $opts['src'] = $filename;
            $opts['notag'] = 1;
            $opts['noembed'] = 1;
            $opts['overwrite'] = 1;
            if( !$prefs->autorotate ) $opts['norotate'] = 1;
            $opts['filter_resize'] = 'e,'.$prefs->max_size;
            if( $prefs->watermark ) $opts['filter_watermark'] = 1;

            debug_to_log($opts,'before process image');
            $out = \cgsi_utils::process_image($opts);
            debug_to_log($out,'after process image');
            if( $out['error'] ) throw new \Exception($out['error']);
            if( !$out['dest_file'] ) throw new \Exception('No cached image generated');
            if( !is_file($out['dest_file']) ) throw new \Exception('Output file not found');
            @rename($out['dest_file'],$filename);
            @unlink($out['dest_file']);
        }
        catch( \Exception $e ) {
            debug_to_log('Error in '.__METHOD__);
            debug_to_log('Filename: '.$filename);
            debug_to_log($e->GetMessage());
            audit('','CGSmartImage AutoProcess','Failed converting '.$filename);
        }
    }

    public function handle()
    {
        foreach( $this->_files as $file ) {
            $this->autoconvert_file($file);
        }
        return TRUE;
    }
}