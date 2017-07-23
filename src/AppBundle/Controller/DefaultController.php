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


use AppBundle\Entity\Pesca;
use AppBundle\Form\FormPesca;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping as ORM;

//SCRITTURA FILE
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="login")
     */
    public function loginAction(Request $request)
    {
       $helper = $this->get('security.authentication_utils');

       return $this->render(
           'auth/login.html.twig',
           array(
               'last_username' => $helper->getLastUsername(),
               'error'         => $helper->getLastAuthenticationError(),
           )
       );
    }

    
    
   public function createAction()
{
    // you can fetch the EntityManager via $this->getDoctrine()
    // or you can add an argument to your action: createAction(EntityManagerInterface $em)
    $em = $this->get('doctrine')->getManager();

    $product = new Users();
    $product->setNome('JKROWLING');

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($product);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();

    return new Response('Saved new product with id '.$product->getId());
}

// if you have multiple entity managers, use the registry to fetch them
public function editAction()
{
    $doctrine = $this->getDoctrine();
    $em = $doctrine->getManager();
    $em2 = $doctrine->getManager('other_connection');
}

    /**
     * @Route("/mappa", name="mappa")
     */
    public function mappaAction(Request $request)
    {
	

	$pescato = new Pesca();
	
	
	$formPescato = $this->createForm(FormPesca::class, $pescato);
	$formPescato->handleRequest($request);

  if ($formPescato->isSubmitted() && $formPescato->isValid()) {
  //	$json3 = $formPescato->handleRequest($request)->get('risposta');

 	//INSERISCO DATI NEL DATABASE
    	$em = $this->getDoctrine()->getManager();
    	$setted = $pescato->getGeojson();
    	$em->persist($pescato);
    	$em->flush();

$idinserimento =$pescato->getId();
/*INSERISCO DATI JSON

*/

// $json3 = json_encode($setted);
    	
    
  $arraydiloc = array();
$nuovo = array();
$data = json_decode($setted,true);
$userid = $pescato-> getIdutente();


/*//$obj = json_decode($json);
foreach($data['features'] as $value){
foreach($value['geometry'] as $geom) {
  array_push($arraydiloc, $value["type"]);
 // }

}*/

for($i=0; $i<count($data['features']); $i++) {
 array_push($arraydiloc, $data['features'][$i]['type']);
//$nuovo['type']=$data['features'][$i]['type'];
//$nuovo['idForma']=$i;
$nuovo[$i]['type']=$data['features'][$i]['geometry']['type'];
for($k=0; $k<count($data['features'][$i]['geometry']['coordinates']); $k++) {
//$nuovo[$i]['type']['coordinates']=$data['features'][$i]['geometry'][$k]['coordinates'];
$nuovo[$i]['coordinates'][$k]=$data['features'][$i]['geometry']['coordinates'][$k];
}
 }
 
 $nuovojson = json_encode($nuovo);

$em = $this->get('doctrine')->getManager();
// $query = $em->createQuery("SELECT geometria FROM postgis;");
 //$query->getResult();
 $nuovojson = substr($nuovojson,1,-1);
 $sql = "insert into postgis (geometria,idinserimento,idutente) VALUES (ST_GeomFromGeoJSON('" .$nuovojson ."'), ".$idinserimento.", " .$userid .");";

$stmt = $em->getConnection()->prepare($sql);
$stmt->execute();   


/*
FINE DATI JSON
*/
    	    	return $this->redirect($this->generateUrl('success'));		
    	}
	
	
	return $this->render('default/mappa.html.twig',array(
		'formpescato' => $formPescato->createView(),
    ));
			
	}

 /**
     * @Route("/foundation", name="foundation")
     */
    public function foundationAction(Request $request)
    {
	
	return $this->render('default/foundation.html.twig');
			
	}

 /**
     * @Route("/modal", name="modal")
     */
    public function modalAction(Request $request)
    {
	
	$utente = new Users();
	
	///
	$formUtente = $this->createForm(FormUtenti::class, $utente);
	$formUtente->handleRequest($request);
    if ($formUtente->isSubmitted() && $formUtente->isValid()) {
 	//ESEGUO AZIONE DI INSERIMENTO DATABASE
 	//INSERISCO DATI NEL DATABASE
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($utente);
    	$em->flush();
    	
    	
    	
    	
    	return $this->redirect($this->generateUrl('success'));		
    	}
	
	return $this->render('default/form.html.twig',array(
		'formutente' => $formUtente->createView(),
    ));
	
	
	}
	
	
		/**
     * @Route("/success", name="success")
     */
    public function successAction(Request $request)
    {
	
	return $this->render('default/success.html.twig');
    
			
	}
	
	
	
    /**
     * @Route("/postgis", name="postgis")
     */
	public function postgisAction(Request $request)
    {
	
	   // you can fetch the EntityManager via $this->getDoctrine()
    // or you can add an argument to your action: createAction(EntityManagerInterface $em)
    $em = $this->get('doctrine')->getManager();

    $posto = new Postgis();
    $posto->setGeometria('LINESTRING(13 43  , 14  44, 15 45)');
    $posto->setGeography('POINT(7.4220761 -122.0845187)');
    
 //   
  //  [[13.605709075927736,43.50647995572425],[13.639354705810549,43.51320287282706],[13.650856018066408,43.49988080891801],[13.641242980957033,43.48593306925072],[13.590774536132814,43.487178534116],[13.605709075927736,43.50647995572425]]]}}]}

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($posto);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();
    
   // $config = new \Doctrine\DBAL\Configuration();
//..

  //     return new Response('Saved new product with id '.$posto->getIdgeom());
	
			
	}
	
	
     /**
     * @Route("/show" ,  name ="show")
     */
     
	public function showAction()
{    

  $em = $this->get('doctrine')->getManager();
  $productId = 1;
    $product = $this->getDoctrine()
        ->getRepository(Postgis::class)
        ->find($productId);

    if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$productId
        );        
}


 $em = $this->get('doctrine')->getManager();
// $query = $em->createQuery("SELECT geometria FROM postgis;");
 //$query->getResult();
 $sql = "SELECT ST_AsGeoJSON(geometria) FROM postgis";



//create the prepared statement, by getting the doctrine connection
$stmt = $em->getConnection()->prepare($sql);
$stmt->execute();
//I used FETCH_COLUMN because I only needed one Column.
 $geo= $stmt->fetchAll();


 // $array = var_export($geo['0']['st_asgeojson'], true);
 $geo2 = html_entity_decode($geo[0]['st_asgeojson']);  
 $geo3 = $geo[0];
 
  $arraydiloc = array();
 foreach ($geo as &$value) {
  array_push($arraydiloc, $value['st_asgeojson']);
}
return $this->render('default/show.html.twig',array(
	'script' => $geo,
	'script2' => $geo2,
	'script3' => $arraydiloc,
	'single' => $geo3
    ));
    
    
}


     /**
     * @Route("/savemaps" ,  name ="savemaps")
     */
     
public function savemapsAction(Request $request)
 {
 
  //    $datajs = $request->get('risposta');
   //  $test=json_encode($datajs,true);
  //$em = $this->get('doctrine')->getManager();
// $sql = "";
  //  $stmt->execute();
//$test = html_entity_decode($datajs, ENT_HTML5, "UTF-8");
//$test = json_decode(test);;
 // return new Response($test);

    //INSERISCO MAPPA	
//RECUPERO DATI AJAX

    	$json3 = $request->request->get('risposta');

  $json3 = json_encode($json3);
    	
    	$json = '{
	"type": "FeatureCollection",
	"features": [{
			"type": "Feature",
			"properties": {},
			"geometry": {
				"type": "LineString",
				"coordinates": [
					[13.560218811035158, 43.50647995572425],
					[13.607940673828127, 43.52403266413883],
					[13.652400970458984, 43.50672896600787],
					[13.63901138305664, 43.48892214178582],
					[13.591117858886719, 43.48643125827837],
					[13.564510345458986, 43.50361626363169]
				]
			}
		},
		{
			"type": "Feature",
			"properties": {},
			"geometry": {
				"type": "LineString",
				"coordinates": [
					[13.525199890136719, 43.535607188089735],
					[13.574981689453127, 43.55377346540471],
					[13.62133026123047, 43.54332230338425],
					[13.526916503906252, 43.518182328624455],
					[13.479881286621094, 43.53660274231031]
				]
			}
		}
	]
}';

$json2 = '{
	"type": "FeatureCollection",
	"features": [{
		"type": "Feature",
		"properties": {},
		"geometry": {
			"type": "Polygon",
			"coordinates": [
				[
					[13.47129821777344, 43.4220062741493],
					[13.489151000976564, 43.33217048621886],
					[13.607940673828127, 43.35963443090038],
					[13.647079467773438, 43.47135922248776],
					[13.47129821777344, 43.4220062741493]
				]
			]
		}
	}]
}';
  $arraydiloc = array();
$nuovo = array();
$data = json_decode($json3,true);



/*//$obj = json_decode($json);
foreach($data['features'] as $value){
foreach($value['geometry'] as $geom) {
  array_push($arraydiloc, $value["type"]);
 // }

}*/

for($i=0; $i<count($data['features']); $i++) {
 array_push($arraydiloc, $data['features'][$i]['type']);
//$nuovo['type']=$data['features'][$i]['type'];
//$nuovo['idForma']=$i;
$nuovo[$i]['type']=$data['features'][$i]['geometry']['type'];
for($k=0; $k<count($data['features'][$i]['geometry']['coordinates']); $k++) {
//$nuovo[$i]['type']['coordinates']=$data['features'][$i]['geometry'][$k]['coordinates'];
$nuovo[$i]['coordinates'][$k]=$data['features'][$i]['geometry']['coordinates'][$k];
}
 }
 
 $nuovojson = json_encode($nuovo);

$em = $this->get('doctrine')->getManager();
// $query = $em->createQuery("SELECT geometria FROM postgis;");
 //$query->getResult();
 $nuovojson = substr($nuovojson,1,-1);
 $sql = "insert into postgis (geometria) VALUES (ST_GeomFromGeoJSON('" .$nuovojson ."'));";

$stmt = $em->getConnection()->prepare($sql);
$stmt->execute();   	


}


   /**
     * @Route("/jsond" ,  name ="jsond")
     */
     
public function jsondAction(Request $request)
 {
$json = '{
	"type": "FeatureCollection",
	"features": [{
			"type": "Feature",
			"properties": {},
			"geometry": {
				"type": "LineString",
				"coordinates": [
					[13.560218811035158, 43.50647995572425],
					[13.607940673828127, 43.52403266413883],
					[13.652400970458984, 43.50672896600787],
					[13.63901138305664, 43.48892214178582],
					[13.591117858886719, 43.48643125827837],
					[13.564510345458986, 43.50361626363169]
				]
			}
		},
		{
			"type": "Feature",
			"properties": {},
			"geometry": {
				"type": "LineString",
				"coordinates": [
					[13.525199890136719, 43.535607188089735],
					[13.574981689453127, 43.55377346540471],
					[13.62133026123047, 43.54332230338425],
					[13.526916503906252, 43.518182328624455],
					[13.479881286621094, 43.53660274231031]
				]
			}
		}
	]
}';

$json2 = '{
	"type": "FeatureCollection",
	"features": [{
		"type": "Feature",
		"properties": {},
		"geometry": {
			"type": "Polygon",
			"coordinates": [
				[
					[13.47129821777344, 43.4220062741493],
					[13.489151000976564, 43.33217048621886],
					[13.607940673828127, 43.35963443090038],
					[13.647079467773438, 43.47135922248776],
					[13.47129821777344, 43.4220062741493]
				]
			]
		}
	}]
}';
  $arraydiloc = array();
$nuovo = array();
$data = json_decode($json2,true);
/*//$obj = json_decode($json);
foreach($data['features'] as $value){
foreach($value['geometry'] as $geom) {
  array_push($arraydiloc, $value["type"]);
 // }

}*/

for($i=0; $i<count($data['features']); $i++) {
 array_push($arraydiloc, $data['features'][$i]['type']);
//$nuovo['type']=$data['features'][$i]['type'];
//$nuovo['idForma']=$i;
$nuovo[$i]['type']=$data['features'][$i]['geometry']['type'];
for($k=0; $k<count($data['features'][$i]['geometry']['coordinates']); $k++) {
//$nuovo[$i]['type']['coordinates']=$data['features'][$i]['geometry'][$k]['coordinates'];
$nuovo[$i]['coordinates'][$k]=$data['features'][$i]['geometry']['coordinates'][$k];
}
}

$nuovojson = json_encode($nuovo);

$em = $this->get('doctrine')->getManager();
// $query = $em->createQuery("SELECT geometria FROM postgis;");
 //$query->getResult();
 $nuovojson = substr($nuovojson,1,-1);
 $sql = "insert into postgis (geometria) VALUES (ST_GeomFromGeoJSON('" .$nuovojson ."'));";

$stmt = $em->getConnection()->prepare($sql);
$stmt->execute();


//create the prepared statement, by getting the doctrine connection
//$stmt = $em->getConnection()->prepare($sql);
//$stmt->execute();

//$prova = var_export($nuovojson);
// $nuovojson =str_replace( array( '/[', ']'), '', json_encode($nuovo))  ;

$nuovojson = substr($nuovojson,1,-1);
return $this->render('default/jsond.html.twig',array(
	'nuovojson' => $nuovojson    ));


}

 /** 
   * @Route("/inserisci" ,  name ="inserisci")
   */
     
public function inserisciAction(Request $request)
 {
 }

}