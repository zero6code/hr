<?php

    require_once(__DIR__.'../../../../db/connect_db.php');

    class DOC_FORM extends CONNECT_DATABASE {


        protected function _select($keyword){
            return $this->select($keyword);
        }
        protected function _select2($keyword){
            return $this->select2($keyword);
        }
        private function select ($keyword) {
            return $this->p_connect()->query(sprintf("SELECT * FROM document_upload_indexpage WHERE tab_menu = '%s' ORDER BY id DESC ", $keyword));
        }
        private function select2 ($keyword) {
            return $this->p_connect()->query(sprintf("SELECT * FROM document_law_indexpage WHERE tab_menu = '%s' ORDER BY id DESC ", $keyword));
        }
  
    }

    // $css = new DOC_FORM();
    // $css->_select("DocUploadTab1","Y");
    // $loop = $css->_select("DocUploadTab1")->fetch_object();
    // printf("%s", $loop->docname);
?>