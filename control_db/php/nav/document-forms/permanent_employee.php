<?php

require_once('../documents-forms-control_db.php');

class PER_EMP extends DOC_FORM {

    public function getData($keyword,$use){
        return $this->permanent_employee($keyword,$use);
    }

    private function permanent_employee ($keyword,$use) {
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

$data = new PER_EMP();
$data->getData("DocUploadTab4","Y");

?>