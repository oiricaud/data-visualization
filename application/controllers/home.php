<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Home extends MY_Controller {

    public function index($renderData=""){
        $this->title= "El Paso Water Utilities Selected Financial and Statistical Data";
        $this->keywords = "Linear Graph";
        $this->type_of_graph = "linegraph";
        $this->description = "Water Project";
        $this->author = "Oscar I. Ricaud";
        $folder = 'template';
        $this->_render('pages/home', $renderData, $folder);
    }

    public function area_graph($renderData=""){
        $this->title= "El Paso Water Utilities Selected Financial and Statistical Data";
        $this->keywords = "Area Graph";
        $this->type_of_graph = "areagraph";
        $this->description = "Water Project";
        $this->author = "Oscar I. Ricaud";
        $folder = 'template';
        $this->_render('pages/area-graph', $renderData, $folder);
    }
    public function bar_graph($renderData=""){
        $this->title= "El Paso Water Utilities Selected Financial and Statistical Data";
        $this->keywords = "Bar Graph";
        $this->type_of_graph = "bargraph";
        $this->description = "Water Project";
        $this->author = "Oscar I. Ricaud";
        $folder = 'template';
        $this->_render('pages/bar-graph', $renderData, $folder);
    }
    public function upload($renderData=""){
        $this->title= "Upload";
        $this->keywords = "upload-csv";
        $this->type_of_graph = "null";
        $this->description = "Water Project";
        $this->author = "Oscar I. Ricaud";
        $folder = 'template';
        $this->_render('pages/bar-graph', $renderData, $folder);
    }
}
