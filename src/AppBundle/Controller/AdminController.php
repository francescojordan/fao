<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



//use Doctrine\ORM\EntityManagerInterface;
 use Jsor\Doctrine\PostGIS\AbstractFunctionalTestCase;
use Jsor\Doctrine\PostGIS\PointsEntity;
// src/AppBundle/Controller/DefaultController.php

// ...
use AppBundle\Entity\Users;
use AppBundle\Form\FormUtenti;
use AppBundle\Entity\Postgis;
use AppBundle\Form\Admin\FormMostra;


use AppBundle\Entity\Pesca;
use AppBundle\Form\FormPesca;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping as ORM;

//SCRITTURA FILE
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;


class AdminController extends Controller
{
    
 /**
     * @Route("/admin/filtra", name="filtra")
     */
    public function mappaAction(Request $request)
    {
	
	$formFiltro = $this->createForm(FormMostra::class);
	$formFiltro->handleRequest($request);

  if ($formFiltro->isSubmitted() && $formFiltro->isValid()) {

 	//INSERISCO DATI NEL DATABASE
    

$data = $formFiltro->getData();         
    $iduser =  $data['idutente'];
    
        if ($iduser!= null) {

    $em = $this->get('doctrine')->getManager();
// $query = $em->createQuery("SELECT geometria FROM postgis;");
 //$query->getResult();
 $sql = "select ST_AsGeoJSON(geometria),valorepescato,tipologiapesca from postgis, pesca where pesca.id = postgis.idinserimento and postgis.idutente= ". $iduser ."";
//select postgis.ST_AsGeoJSON(geometria),pesca.valorepescato,pesca.tipologiapesca from postgis, pesca where pesca.id = postgis.idinserimento and postgis.idutente= 13;


//create the prepared statement, by getting the doctrine connection
$stmt = $em->getConnection()->prepare($sql);
$stmt->execute();
//I used FETCH_COLUMN because I only needed one Column.
 $product= $stmt->fetchAll();
 
 return $this->render('admin/mappafiltrata.html.twig',array(
		'idutente' => $iduser,
		'geometria' => $product[0]['st_asgeojson'],
		'arrayquery' => $product
		
    ));


    //           return new Response("PROVA:". $product[0]['st_asgeojson']);
  /*    
      / $array = var_export($geo['0']['st_asgeojson'], true);
 $geo2 = html_entity_decode($geo[0]['st_asgeojson']);  
 $geo3 = $geo[0];
 
  $arraydiloc = array();
 foreach ($geo as &$value) {
  array_push($arraydiloc, $value['st_asgeojson']);
}
*/}

else {
    $gruppo =  $data['gruppo'];

$em = $this->get('doctrine')->getManager();
// $query = $em->createQuery("SELECT geometria FROM postgis;");
 //$query->getResult();
 $sql = "select ST_AsGeoJSON(geometria),valorepescato,tipologiapesca from postgis, pesca, utenti where pesca.id = postgis.idinserimento and postgis.idutente= utenti.id and utenti.gruppo= ". $gruppo ."";
//select postgis.ST_AsGeoJSON(geometria),pesca.valorepescato,pesca.tipologiapesca from postgis, pesca where pesca.id = postgis.idinserimento and postgis.idutente= 13;


//create the prepared statement, by getting the doctrine connection
$stmt = $em->getConnection()->prepare($sql);
$stmt->execute();
//I used FETCH_COLUMN because I only needed one Column.
 $product= $stmt->fetchAll();
return $this->render('admin/mappafiltrata.html.twig',array(


		'arrayquery' => $product
		
    ));

 }
               


    	}
	
	
	return $this->render('admin/filtra.html.twig',array(
		'filtro' => $formFiltro->createView(),
    ));
			
	}
}