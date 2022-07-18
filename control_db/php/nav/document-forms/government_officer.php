<?php
//error_reporting(0);
require_once('../documents-forms-control_db.php');

class GOV_OFF extends DOC_FORM {

    public function getData($keyword,$use){
        return $this->government_officer($keyword,$use);
    }

    private function government_officer ($keyword,$use) {
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

$data = new GOV_OFF();
$data->getData("DocUploadTab1","Y");

?>