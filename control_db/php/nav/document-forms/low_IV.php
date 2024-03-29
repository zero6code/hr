<?php

require_once('../documents-forms-control_db.php');

class LOW_IV extends DOC_FORM {

    public function getData($keyword,$use){
        return $this->func_low_IV($keyword,$use);
    }

    private function func_low_IV ($keyword,$use) {
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
        print json_encode($rows, JSON_UNESCAPED_UNICODE);
    }

}

$data = new LOW_IV();
$data->getData("DocLawTab4","Y");

?>