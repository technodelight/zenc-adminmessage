<?php

class Zenc_AdminMessage_Block_Adminhtml_System_Config_Form_Field_Array_Message
    extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    /**
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return String
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->addColumn(
            'type', array(
                'label' => 'Type',
            )
        );
        $this->addColumn(
            'content', array(
                'label' => 'Content',
            )
        );

        // Get the default HTML for this option
        $html = parent::_getElementHtml($element);

        return $html;
    }
}
