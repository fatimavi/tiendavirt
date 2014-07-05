<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Entity\Rol;
use Admin\Entity\Usuario;

class RolController extends AbstractActionController
{
    public function listarAction()
    {
        //con esto estamos listo para usar doctrine/ creamos una conexion
        $objectManager = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');
        
        //PARA LISTAR TODOS LOS DATOS
        
        $claseRol = $objectManager->getRepository('Admin\Entity\Rol');
        $rol = $claseRol->findAll(); //recupera todos los datos
       // print_r($rol);
        $valores=array("titulo"=>'Listado de roles',
            "datos"=>$rol); 
        
        
        return new ViewModel($valores);
        
        //insertar datos a rol
        /*$rol = new Rol();
        $rol->setNombre('ARCANGEL');
   
         //PARA GUARDAR LOS CAMBIOS
         
          $objectManager->persist($rol); //para grabar en la memoria
          $objectManager->flush(); //se graba en la base de datos
          //(var_dump($rol->getId())); 
          //(var_dump($rol->getNombre()));             
        
          
          echo $rol->getId();
          echo ' - ';
          echo $rol->getNombre();
          */
          
        /*
           // PARA BUSCAR POR "ID" Y MODIFICAR
         
          $rol = $objectManager->find('Admin\Entity\Rol',3);
          //modificar un campo
          $rol->setNombre('GERENTE');
          $objectManager->flush();
          //var_dump($rol->getNombre());
          echo $rol->getNombre();
          
                         //$rol = $objectManager->find('Admin\Entity\Rol',4);
                        //modificar un campo
                         //$rol->setNombre('CAJERO');
                         //$objectManager->flush();
                         //var_dump($rol->getNombre());
                         //echo $rol->getId();
                         //echo ' - '.$rol->getNombre();
          
         */
        
        /*
             //PARA ELIMINAR
        
           $rol = $objectManager->find('Admin\Entity\Rol',4);
           $objectManager->remove($rol);
           $objectManager->flush();
           echo $rol->getNombre(),'fue eliminado de la red';
          */
        
        
        
        //GUARDAR EN UNA ASOCIACION DE CLASES DE MUCHOS A UNO
         //crear usuario
        /* $usuario = new Usuario();
         $usuario->setNombrecompleto('ARCANGEL GABRIEL');
         $usuario->setUser('arcangel');
         $usuario->setPassword('123456');
         $usuario->setEstado('activo');
         $objectManager->persist($usuario);
         */
         //obtener objeto rol a asociar
         /*
         $rol = $objectManager->find('Admin\Entity\Rol',1);
         $usuario->setRol($usuario);//asignar el objeto asociado
         $objectManager->flush();
         echo $usuario->getNombrecompleto().'fue guardado correctamente';
        */
        
        
          
          
        
    }
}
