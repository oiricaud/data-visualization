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

}
