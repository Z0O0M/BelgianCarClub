<?php
class LanguageLoader {
 
   function initialize() {
       $ci =& get_instance();
       $ci->load->helper('language');
       $siteLang = $ci->session->userdata('site_lang');
       if ($siteLang) {
           $ci->lang->load('message',$ci->session->userdata('site_lang'));
       } else {
           $ci->lang->load('message','english');
       }
   }
}