<?php

require_once('../documents-forms-control_db.php');

class MH_EMP extends DOC_FORM {

    public function getData($keyword,$use){
        return $this->mh_employees($keyword,$use);
    }

    private function mh_employees ($keyword,$use) {
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

$data = new MH_EMP();
$data->getData("low_I","Y");

?>