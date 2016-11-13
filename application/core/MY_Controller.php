<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    //Page info
    protected $data = Array();
    protected $pageName = FALSE;
    protected $template = "main";
    protected $hasNav = TRUE;

    //Page contents
    protected $javascript = array();
    protected $css = array();
    protected $fonts = array();

    //Page Meta
    protected $title = FALSE;
    protected $description = FALSE;
    protected $keywords = FALSE;
    protected $author = FALSE;
    protected $type_of_graph = FALSE;

    //Session ID
    protected $session_id;

    function __construct(){

       parent::__construct();
        //I don't know what this is
        $this->data["uri_segment_1"] = $this->uri->segment(1);
        $this->data["uri_segment_2"] = $this->uri->segment(2);

        //Metadata
        $this->title = $this->config->item('site_title');
        $this->description = $this->config->item('site_description');
        $this->keywords = $this->config->item('site_keywords');
        $this->type_of_graph = $this->config->item('type_graph');
        $this->author = $this->config->item('site_author');
        $this->pageName = strToLower(get_class($this));

        // SESSION
        $this->session_id =  substr($this->session->userdata('session_id'), 27);
    }

    protected function _render($view, $renderData="FULLPAGE", $folder)
    {
        switch ($renderData) {
        //    case "AJAX"     :
                //$this->load->view($view, $this->data);
           //     break;
           // case "JSON"     :
                //echo json_encode($this->data);
          //      break;
            case "FULLPAGE" :
            default         :

                //session
                 $toTpl["session_id"] = $this->session_id;

                //static
                $toTpl["javascript"] = $this->javascript;
                $toTpl["css"] = $this->css;
                $toTpl["fonts"] = $this->fonts;

                //meta
                $toTpl["title"] = $this->title;
                $toTpl["description"] = $this->description;
                $toTpl["keywords"] = $this->keywords;
                $toTpl["type_of_graph"] = $this->type_of_graph;
                $toTpl["author"] = $this->author;

                //data
                $toBody["content_body"] = $this->load->view($view, array_merge($this->data, $toTpl), true);


                //nav menu
                if ($this->hasNav) {
                    $this->load->helper("nav");
                    $toMenu["pageName"] = $this->pageName;
                    $toHeader["nav"] = $this->load->view($folder . "/nav", $toMenu, true);
                }

                //static
                $toHeader["basejs"] = $this->load->view($folder . "/basejs", $this->data, true);
                $toBody["nav"] = $this->load->view($folder . "/nav", $toHeader, true);
                $toBody["sidebar"] = $this->load->view($folder . "/sidebar", $toHeader, true);
                $toBody["footer"] = $this->load->view($folder . "/footer", '', true);

                 // body
                $toTpl["body"] = $this->load->view($folder . "/" . $this->template, $toBody, true);

                //render view
                $this->load->view($folder . "/skeleton", $toTpl);

                break;
        }
    }
}

