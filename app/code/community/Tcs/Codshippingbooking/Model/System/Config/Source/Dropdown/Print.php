<?php

class Tcs_Codshippingbooking_Model_System_Config_Source_Dropdown_Print {
    public function toOptionArray() {
        return array(
            array(
                'value' => 'pdf',
                'label' => 'PDF',
            ),
            array(
                'value' => 'html',
                'label' => 'HTML',
            ),
            
        );
    }
}