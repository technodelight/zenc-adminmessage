<?php

class Zenc_AdminMessage_Block_Adminhtml_Message extends Mage_Core_Block_Template
{
    const XML_PATH_STATUS = 'zencadminmessage/general/enabled';
    const XML_PATH_CONTENT = 'zencadminmessage/general/messages';

    /**
     * @return array
     */
    public function getMessages()
    {
        $messages = array();
        if ($this->isEnabled() && $messages = Mage::getStoreConfig(self::XML_PATH_CONTENT)) {
            $messages = unserialize($messages);
        }
        return $messages ?: array();
    }

    public function isEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_STATUS);
    }
}
