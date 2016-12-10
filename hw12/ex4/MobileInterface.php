<?php
interface MobileInterface
{
    /**
     * @return string Class name
     */
    public function getModel();
    
    /**
     * @return string
     */
    public function getOwner();
    
    /**
     * Return Phone type e.g. some Enumeration
     * @return string
     */
    public function getType();
    
    /**
     * @return Battery
     */
    public function getBattery();
    
    /**
     * @return Screen
     */
    public function getScreen();
    
    /**
     * Return pretty formatted message with phone info
     * @return string
     */
    public function getInfo();
}
