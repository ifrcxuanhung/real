<?php

class Benchmarktool extends Admin_Controller 
{

	public function __construct(){
		parent::__construct();
        
        ini_set('max_execution_time', 0);
        ini_set('display_errors',1);
        error_reporting(E_ALL);
        //$this->output->enable_profiler(TRUE);
	}
    
    public function index()
	{

        // Load view
		$this->data['subview'] = 'admin/benchmarktool/index';
        $this->load->view('admin/_layout_main', $this->data);
	}
    
    public function fake_listings($listing_num)
    {
        echo("STARTED fake_listings, num: $listing_num<br />");
        
        $start_time = time();
        
        $this->load->model('estate_m');
        
        for($i=0;$i<$listing_num;$i++)
        {
            $data = array();
            $dynamic_data = array();
            
            $this->generate_dummy_property($data, $dynamic_data);

            $insert_id = $this->estate_m->save($data, NULL);
            $this->estate_m->save_dynamic($dynamic_data, $insert_id, FALSE);
            
            if($i % 100 == 0 && $i>0)
            {
                echo "generated: $i <br />";
            }
            
            if(time()-$start_time > 2000)
            {
                echo "generated: $i, time limit 2000s <br />";
                break;
            }
        }
        
        echo("COMPLETED<br />");
    }
    
    public function generate_sitemap()
    {
        echo("STARTED generate_sitemap<br />");
        
        $this->load->library('sitemap');
        $this->sitemap->generate_sitemap();
        
        echo("COMPLETED<br />");
    }

    private	function rand_coord() {
        $num1 = rand(-80,80);
        $num2 = rand(-150,150);
        $new_coord = $num1 . ", " . $num2;
        
        return $new_coord;
    }

    private function generate_dummy_property(&$data, &$dynamic_data)
    {

$data['gps']=$this->rand_coord();;
$data['date']=date('Y-m-d H:i:s');
$data['address']='Cestica '.substr(md5(microtime().'e'),0,5);
$data['is_featured']='';
$data['is_activated']='1';
$data['date_modified'] = date('Y-m-d H:i:s');
$dynamic_data['option10_1']='Bjelovar estate '.substr(md5(microtime()),0,5);
$dynamic_data['option8_1']='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate nec neque gravida rhoncus. Donec sit amet blandit mauris, sed bibendum risus.';
$dynamic_data['option17_1']='

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate nec neque gravida rhoncus. Donec sit amet blandit mauris, sed bibendum risus. Cras ut urna semper, facilisis augue sed, imperdiet nulla. Duis tristique tellus tortor, dapibus gravida sem sodales id. Nullam quis convallis libero, vitae pulvinar nisi.

Nam eget est facilisis, porta mi ac, ultricies enim. Proin nisi diam, eleifend ac eleifend in, dapibus in orci. Vestibulum elementum lectus non nisl venenatis, tempus molestie nisi tempus. Pellentesque facilisis nibh nec purus blandit, id aliquam lorem fermentum.

Ut erat lacus, sagittis ac leo eu, molestie mattis libero. Nam sit amet massa et magna porttitor eleifend a aliquam nunc. Pellentesque a est a augue dignissim tristique eu nec augue. Integer pretium sollicitudin tellus, quis hendrerit nunc accumsan et. Fusce bibendum a neque vel fringilla. Vivamus viverra enim at purus gravida, in elementum neque eleifend. Curabitur sodales dapibus urna, at mattis lacus eleifend non. Donec ultricies porta orci eu congue. Nulla sodales arcu a libero aliquet, nec aliquam ante sagittis.
';
$dynamic_data['option38_1']='empty';
$dynamic_data['option6_1']='apartment';
$dynamic_data['option56_1']='';
$dynamic_data['option1_1']='';
$dynamic_data['option4_1']='Rent';
$dynamic_data['option2_1']='Apartment';
$dynamic_data['option5_1']='Bjelovarska';
$dynamic_data['option7_1']='Bjelovar';
$dynamic_data['option40_1']='42208';
$dynamic_data['option3_1']='Less than 50m2';
$dynamic_data['option57_1']='40';
$dynamic_data['option39_1']='-';
$dynamic_data['option19_1']='3';
$dynamic_data['option20_1']='3';
$dynamic_data['option58_1']='7';
$dynamic_data['option36_1']='90,000.00';
$dynamic_data['option55_1']='';
$dynamic_data['option37_1']='';
$dynamic_data['option54_1']='Agent';
$dynamic_data['option53_1']='-';
$dynamic_data['option59_1']='70';
$dynamic_data['option60_1']='20';
$dynamic_data['option65_1']='0';
$dynamic_data['option64_1']='0';
$dynamic_data['option66_1']='';
$dynamic_data['option67_1']='FieldGate properties';
$dynamic_data['option74_1']='0';
$dynamic_data['option68_1']='1234567890';
$dynamic_data['option69_1']='http://www.google.com';
$dynamic_data['option70_1']='http://www.facebook.com';
$dynamic_data['option71_1']='http://www.twitter.com';
$dynamic_data['option72_1']='345 Dixon Road Toronto Ontario M9R 15G (Dixon & Kipling)';
$dynamic_data['option73_1']='0-24';
$dynamic_data['option21_1']='';
$dynamic_data['option22_1']='true';
$dynamic_data['option23_1']='';
$dynamic_data['option24_1']='true';
$dynamic_data['option25_1']='';
$dynamic_data['option28_1']='true';
$dynamic_data['option29_1']='true';
$dynamic_data['option31_1']='true';
$dynamic_data['option52_1']='';
$dynamic_data['option11_1']='true';
$dynamic_data['option30_1']='';
$dynamic_data['option27_1']='true';
$dynamic_data['option33_1']='true';
$dynamic_data['option32_1']='true';
$dynamic_data['option43_1']='';
$dynamic_data['option44_1']='600';
$dynamic_data['option45_1']='600';
$dynamic_data['option46_1']='600';
$dynamic_data['option47_1']='600';
$dynamic_data['option48_1']='';
$dynamic_data['option49_1']='';
$dynamic_data['option50_1']='';
$dynamic_data['option51_1']='';
$dynamic_data['option9_1']='';
$dynamic_data['option12_1']='';
$dynamic_data['option42_1']='';
$dynamic_data['slug_1']='bjelovar-estate'.substr(md5(microtime()),0,5);
$dynamic_data['option10_2']='Bjelovar nekretnina '.substr(md5(microtime()),0,5);
$dynamic_data['option8_2']='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate nec neque gravida rhoncus. Donec sit amet blandit mauris, sed bibendum risus.';
$dynamic_data['option17_2']='

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate nec neque gravida rhoncus. Donec sit amet blandit mauris, sed bibendum risus. Cras ut urna semper, facilisis augue sed, imperdiet nulla. Duis tristique tellus tortor, dapibus gravida sem sodales id. Nullam quis convallis libero, vitae pulvinar nisi.

Nam eget est facilisis, porta mi ac, ultricies enim. Proin nisi diam, eleifend ac eleifend in, dapibus in orci. Vestibulum elementum lectus non nisl venenatis, tempus molestie nisi tempus. Pellentesque facilisis nibh nec purus blandit, id aliquam lorem fermentum.

Ut erat lacus, sagittis ac leo eu, molestie mattis libero. Nam sit amet massa et magna porttitor eleifend a aliquam nunc. Pellentesque a est a augue dignissim tristique eu nec augue. Integer pretium sollicitudin tellus, quis hendrerit nunc accumsan et. Fusce bibendum a neque vel fringilla. Vivamus viverra enim at purus gravida, in elementum neque eleifend. Curabitur sodales dapibus urna, at mattis lacus eleifend non. Donec ultricies porta orci eu congue. Nulla sodales arcu a libero aliquet, nec aliquam ante sagittis.
';
$dynamic_data['option38_2']='empty';
$dynamic_data['option6_2']='apartment';
$dynamic_data['option56_2']='';
$dynamic_data['option1_2']='';
$dynamic_data['option4_2']='Najam';
$dynamic_data['option2_2']='Stan';
$dynamic_data['option5_2']='Bjelovarska';
$dynamic_data['option7_2']='Bjelovar';
$dynamic_data['option40_2']='42208';
$dynamic_data['option3_2']='Manje od 50m2';
$dynamic_data['option57_2']='40';
$dynamic_data['option39_2']='-';
$dynamic_data['option19_2']='3';
$dynamic_data['option20_2']='3';
$dynamic_data['option58_2']='7';
$dynamic_data['option36_2']='90,000.00';
$dynamic_data['option55_2']='';
$dynamic_data['option37_2']='';
$dynamic_data['option54_2']='Agent';
$dynamic_data['option53_2']='-';
$dynamic_data['option59_2']='70';
$dynamic_data['option60_2']='20';
$dynamic_data['option65_2']='0';
$dynamic_data['option64_2']='0';
$dynamic_data['option66_2']='';
$dynamic_data['option67_2']='FieldGate properties 2';
$dynamic_data['option74_2']='0';
$dynamic_data['option68_2']='1234567890';
$dynamic_data['option69_2']='http://www.google.com';
$dynamic_data['option70_2']='http://www.facebook.com';
$dynamic_data['option71_2']='http://www.twitter.com';
$dynamic_data['option72_2']='My company description';
$dynamic_data['option73_2']='0-24';
$dynamic_data['option21_2']='';
$dynamic_data['option22_2']='true';
$dynamic_data['option23_2']='';
$dynamic_data['option24_2']='true';
$dynamic_data['option25_2']='';
$dynamic_data['option28_2']='true';
$dynamic_data['option29_2']='true';
$dynamic_data['option31_2']='true';
$dynamic_data['option52_2']='';
$dynamic_data['option11_2']='true';
$dynamic_data['option30_2']='';
$dynamic_data['option27_2']='true';
$dynamic_data['option33_2']='true';
$dynamic_data['option32_2']='true';
$dynamic_data['option43_2']='';
$dynamic_data['option44_2']='600';
$dynamic_data['option45_2']='600';
$dynamic_data['option46_2']='600';
$dynamic_data['option47_2']='600';
$dynamic_data['option48_2']='';
$dynamic_data['option49_2']='';
$dynamic_data['option50_2']='';
$dynamic_data['option51_2']='';
$dynamic_data['option9_2']='';
$dynamic_data['option12_2']='';
$dynamic_data['option42_2']='';
$dynamic_data['slug_2']='bjelovar-nekretnina'.substr(md5(microtime()),0,5);;
$dynamic_data['agent']='';


$this->load->model('option_m');
if(!isset($this->data['options_lang']))
{
    // Get all options
    foreach($this->option_m->languages as $key=>$val){
        $this->data['options_lang'][$key] = $this->option_m->get_lang(NULL, FALSE, $key);
    }
    $this->data['options'] = $this->option_m->get_lang(NULL, FALSE, 1);
    
    $options_data = array();
    foreach($this->option_m->get() as $key=>$val)
    {
        $options_data[$val->id][$val->type] = 'true';
    }
    
    $this->data['options_data'] = $options_data;
}

$options_data = &$this->data['options_data'];


$data['search_values'] = $data['address'];
foreach($dynamic_data as $key=>$val)
{
    $pos = strpos($key, '_');
    $option_id = substr($key, 6, $pos-6);
    $language_id = substr($key, $pos+1);
    
    if(!isset($options_data[$option_id]['TEXTAREA']) && !isset($options_data[$option_id]['CHECKBOX'])){
        $data['search_values'].=' '.$val;
    }
    
    // TODO: test check, values for each language for selected checkbox
    if(isset($options_data[$option_id]['CHECKBOX'])){
        if($val == 'true')
        {
            foreach($this->option_m->languages as $key_lang=>$val_lang){
                foreach($this->data['options_lang'][$key_lang] as $key_option=>$val_option){
                    if($val_option->id == $option_id && $language_id == $key_lang)
                    {
                        $data['search_values'].=' true'.$val_option->option;
                    }
                }
            }
        }
    }
}

    }

}