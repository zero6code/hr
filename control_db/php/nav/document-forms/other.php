<?php

require_once('../documents-forms-control_db.php');

class OTH extends DOC_FORM {

    public function getData($keyword,$use){
        return $this->other($keyword,$use);
    }

    private function other ($keyword,$use) {
        $data = $this->_select($keyword);
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

$data = new OTH();
$data->getData("DocUploadTab6","Y");

?>