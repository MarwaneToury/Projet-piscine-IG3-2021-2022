<?php 
require_once "model.php";

class modelReutiliser extends model
{
    private Code_REC;
    private Code_REC_1;
    protected static $object = "Reutiliser";
    protected static $primary = "Code_REC";

    public function getCode_REC()
    {
        return $this->Code_REC;
    }

    public function getCode_REC_1()
    {
        return $this->Code_REC_1;
    }

    public function __construct($data = NULL)
    {
        if (!is_null($data)) {
            $this->Code_REC = $data[0];
            $this->Code_REC_1= $data[1];
        }
    }
}

?>