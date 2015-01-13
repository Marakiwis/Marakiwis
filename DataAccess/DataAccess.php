<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath ( dirname ( __FILE__ ) . $ds . '..' ) . $ds;
require_once "{$base_dir}Config{$ds}rb.php";
R::setup ( "mysql:host=localhost;dbname=gtclient", 'root', '123456' );
class DataAccess {
	/**
	 * $nameOfClass Nombre de la clase desde la base de datos
	 */
	public static function getClass($nameOfClass) {
		return R::dispense ( $nameOfClass );
	}
	
	/**
	 * Guarda la entidad en la base de datos, en caso que no exista crea la tabla y retorna el id asociado a la inserción.
	 */
	public static function saveEntity($entity) {
		return R::store ( $entity );
	}
	
	/**
	 * Actualiza la entidad cargada desde base de datos.
	 */
	public static function updateEntity($entity) {
		self::saveEntity ( $entity );
	}
	/**
	 * Cambia el campo eliminado de 0 a 1
	 */
	public static function deleteEntity($entity) {
		$entity->eliminado = 1;
		self::updateEntity ( $entity );
	}
	/**
	 * Se le entrega una clase y luego el filtro que son solo los WHERE
	 */
	public static function findObject($class, $filter) {
		return R::findOne ( $class, $filter );
	}
	/**
	 * Carga un objeto con el nombre de la clase y el id correspondiente
	 */
	public static function loadObject($class, $id) {
		return R::load ( $class, $id );
	}
	/**
	 * Recibe el nombre de la clase que se busca y que no este eliminado.
	 */
	public static function findAllObject($class) {
		return R::getAll ( 'SELECT * FROM ' . $class . ' WHERE eliminado = 0' );
	}
	
	/**
	 * Recibe el nombre de la clase que se busca y también los filtros para realizar una busqueda y
	 * entregar los objetos que existan según su filtro y que no este eliminado.
	 */
	public static function findAllObjectWithFilter($class, $filter) {
		return R::getAll ( 'SELECT * FROM ' . $class . ' WHERE eliminado = 0 AND ' . $filter );
	}
	/**
	 * Ejecuta una query la cual te devuelve sus resultados como un array()
	 */
	public static function executeQuery($query) {
		return R::getAll ( $query );
	}
}