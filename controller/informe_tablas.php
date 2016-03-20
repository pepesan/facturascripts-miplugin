<?php

/**
 * Created by IntelliJ IDEA.
 * User: pepesan
 * Date: 20/3/16
 * Time: 1:30
 */
class informe_tablas extends fs_controller
{
    public $tablas;
    public $tabla;
    public $columnas=FALSE;
    public function __construct()
    {
        parent::__construct(__CLASS__,"Tablas","informes");
    }
    protected function private_core(){
        if(isset($_GET['table'])){
            $this->tabla=$_GET['table'];
            $this->columnas=$this->db->get_columns($this->tabla);
        }
        $this->tablas=$this->db->list_tables();
    }
}