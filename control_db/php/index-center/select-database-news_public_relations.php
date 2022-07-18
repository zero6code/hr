<?php
require_once(__DIR__.'../../../../db/connect_db.php');

class SELECT_NEWS_PUBLIC_RELATION extends CONNECT_DATABASE {

    protected function _select(){
        return $this->select_news();
    }
    protected function _select2(){
        return $this->select_public_relations();
    }

    private function select_news(){
        return $this->p_connect()->query(sprintf("SELECT * FROM blog_newsheadline ORDER BY id DESC"));
    }
    private function select_public_relations(){
        return $this->p_connect()->query(sprintf("SELECT * FROM blog_info WHERE status_use = 'Y' ORDER BY id DESC "));
    }
}
?>
