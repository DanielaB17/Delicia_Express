<?php 
interface daoUsuarios{
    public function registrar(Usuarios $a);
    public function modificar(Usuarios $a);
    public function eliminar(Usuarios $a);
    //public function buscar($campo,$dato);
    public function listar();
}
    interface daoDomiciliarios
    {
    public function registrar1(Domiciliarios $a1);
    public function modificar1(Domiciliarios $a1);
    public function eliminar1(Domiciliarios $a1);
    //public function buscar($campo,$dato);
    public function listar1();

}
?>  