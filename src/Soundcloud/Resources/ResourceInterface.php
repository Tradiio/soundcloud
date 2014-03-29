<?php
namespace Njasm\Soundcloud\Resources;

interface ResourceInterface 
{
    /**
     * @return string 
     */
    public function getPath();
    
    /**
     * @return void
     */
    public function setParams(array $params = array());
    
    /**
     * @return array
     */
    public function getParams();
    
    /**
     * @return string 
     */
    public function getVerb();
}

