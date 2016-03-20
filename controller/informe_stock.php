<?php

/**
 * Created by IntelliJ IDEA.
 * User: pepesan
 * Date: 20/3/16
 * Time: 0:34
 */
class informe_stock extends fs_controller
{
    public $inventario;
    public $numero;
    public $offset=0;

    public function __construct()
    {
        parent::__construct(__CLASS__,"inventario","informes");
    }
    protected function private_core(){
        if(isset($_GET['offset'])){
            $this->offset=intval($_GET['offset']);
        }
        $sql="select * from stocks order by referencia ASC ";
        $this->inventario=$this->db->select_limit($sql,3,$this->offset);
        $this->numero=$this->db->select("Select COUNT(*) from stocks");
        //$this->template=FALSE;
        //var_dump($this->numero);
    }
}