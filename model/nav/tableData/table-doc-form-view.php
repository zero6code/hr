<?php
    class TABLE_DOC_FORM {

        public function main($id){
            return ('
                    <table class="table table-striped">
                        <thead class="fs-8">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" >เรื่อง</th>
                                <!-- <th scope="col">ประกาศเมื่อ</th> -->
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="'.$id.'" class="fs-6 overflow-auto"></tbody>
                    </table>

            ');
        }

    }

    
?>