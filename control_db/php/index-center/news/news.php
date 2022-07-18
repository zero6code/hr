<?php
    require_once("../select-database-news_public_relations.php");

    class DATA_NEWS extends SELECT_NEWS_PUBLIC_RELATION {

        public function __construct($use){
            return $this->select_data_news($use);
        }

        private function select_data_news ($use){
            $data = $this->_select();
            $rows = array();
            while($loop = $data->fetch_object()){
                if(($use === "Y") && ($loop->status_use === "Y")){
                    $rows[] = $loop;
                }else if(($use === "N") && ($loop->status_use === "N")){
                    $rows[] = $loop;
                }else{
                    null;
                }
            }
            printf(json_encode($rows, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE));
        }
    }

    new DATA_NEWS("Y");
?>