<?php

require_once('../documents-forms-control_db.php');

class LOW_V extends DOC_FORM {

    public function getData($keyword,$use){
        return $this->func_low_V($keyword,$use);
    }

    private function func_low_V ($keyword,$use) {
        $data = $this->_select2($keyword);
        $rows = array();
        while($loop = $data->fetch_object()){

            if( ($use === "Y") && ($loop->status_use === "Y")){
                $rows[] = $loop;
            }else if( ($use === "N") && ($loop->status_use === "N")){
                $rows[] = $loop;
            }else{
               null;
            }

        }
        print json_encode($rows, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
    }

}

$data = new LOW_V();
$data->getData("DocLawTab5","Y");

?>