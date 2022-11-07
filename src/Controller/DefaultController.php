<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


use App\Entity\Video;
use App\Entity\AcModule;
use App\Repository\AcModuleRepository;
use App\Repository\VideoRepository;


class DefaultController extends AbstractController
{

   
 

    /**
     * @Route("/api/{id}", name="api")
     */
    public function api($id)
    {
       

        // $videos = $this->getDoctrine()
        // ->getRepository(Video::class)
        // ->findAll();

        $sql="select id,description,slug from video where id_element=".$id."";

        $stmt = $this->getDoctrine()->getConnection()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();

        $response = new Response();

        $response->setContent(json_encode($data));

        $response->headers->set('Content-Type', 'application/json');
        // Allow all websites
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');
        //$response->headers->set('Access-Control-Allow-Origin', 'https://jsfiddle.net/');//$response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');    
        return $response;
    }


    // /**
    //  * @Route("/index", name="index")
    //  */
    // public function index()
    // {
    //     // $sql="select id,code,designation from ac_module";

    //     // $stmt = $this->getDoctrine()->getConnection()->prepare($sql);
    //     // $stmt->execute();
    //     // $data = $stmt->fetchAll();
        
    //     // return $this->json( $data,200);
    //      echo phpinfo();

    //     $videos = $this->getDoctrine()
    //     ->getRepository(Video::class)
    //     ->findAll();

    //     return $this->render('default/index.html.twig', [ 'videos' => $videos ]);
    // }

    
    /**
     * @Route("/video/{slug}", name="video")
     */
     public function video($slug)
     {
        // echo 'test';
        // print_r($_SESSION['url']);
        //  if(!isset($_SERVER['HTTP_REFERER'])){
        //     // redirect them to your desired location
        //     header('location:https://www.ues.ma/login');
        //     exit;
        // }

        // dd($slug);
         $video = $this->getDoctrine()->getRepository(Video::class)->findBySlug($slug);
        
        // $video = $this->getDoctrine()
        // ->getRepository(Video::class)
        // ->findOneBy(['slug' => $slug]);

        $videos = $this->getDoctrine()
        ->getRepository(Video::class)
        ->findAll();
         return $this->render('default/video.html.twig', [ 'video' => $video,'videos' => $videos ]);
     }
     
 

     /**
     * @Route("/", name="home")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function home()
    {
        $username = $this->get('security.token_storage')->getToken()->getUser()->getUsername();

        $AcModule = $this->getDoctrine()
        ->getRepository(AcModule::class)
        ->findAll();
        return $this->render('default/admin/home.html.twig', [ 'AcModule' => $AcModule, 'username' => $username ]);
    }


    /**
     * @Route("/insertVideo", name="insertVideo")
     */
    public function insertVideo(Request $request)
    {
        return $this->render('default/admin/home.html.twig', [ 'controller_name' => 'video', ]);
    }


    /**
     * @Route("/info_piece", name="info_piece")
    */
    public function infoPiece(Request $request,AcModuleRepository $acModuleRepository) {


        $link = '';
        // $files = $request->files->get('files')['file'];
        // $i = 0;
        // foreach($files as $file){
        //     /**
        //      * @var UploadedFile $file
        //      */
        //     $fileName = md5(uniqid()).'!!'.$file->getClientOriginalName().'.'.$file->guessExtension();
        //     if($i == 0){
        //         $link = $fileName ;
        //     }else{
        //         $link = $link .'|'. $fileName ;
        //     }
            
        //     $save = $file->move($this->getParameter('brochures_directory'),$fileName);
        //     $i=1;
            
        // }

        


        // $file        = $request->files->get('fileToUpload');
        // $video       = $request->files->get('videoToUpload');
        $description = $request->get('description');
        // $select      = $request->get('slct');
        $Etablissement      = $request->get('Etablissement');
        $Formation          = $request->get('Formation');
        $Promotion          = $request->get('Promotion');
        $Semestre           = $request->get('Semestre');
        $Module             = $request->get('Module');
        $Element            = $request->get('Element');
        
        $description_replace = str_replace("/","+",$description);

        // if(isset($video)){
            
        //     $slug               = md5(uniqid()).$video->getClientOriginalName();

        //     // $fileName    = md5(uniqid()).'.'.$file->guessExtension();
        //     $videoName   = md5(uniqid()).'.'.md5($video->guessExtension());
            
        //     // $save      = $file->move($this->getParameter('brochures_directory'),$fileName);
        //     $saveVideo = $video->move($this->getParameter('brochures_directory'),$videoName);
        // }
        
        
        $entityManager = $this->getDoctrine()->getManager();

        // $acModule = $this->getDoctrine()
        // ->getRepository(AcModule::class)
        // ->find(intval($select));

        $Video = new Video();

        // if(isset($video)){
        //     $Video->setVideo($videoName);
        // }
        
        $Video->setVideo($description_replace);
        $Video->setDescription($description_replace);
        $Video->setPiece($link);
        $Video->setIdEtablissement($Etablissement);
        $Video->setIdFormation($Formation);
        $Video->setIdPromotion($Promotion);
        $Video->setIdSemestre($Semestre);
        $Video->setIdModulee($Module);
        $Video->setIdElement ($Element);
        $Video->setSlug ($description_replace);


        // if(isset($slug)){
        //      $Video->setSlug ($slug);
        // }

        // $Video->setImage($fileName);
        // $Video->setIdModule($acModule);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($Video);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
 
        // ------------------------------------------------------------
        // // $uploadDir  = $this->getParameter('brochures_directory');

        // foreach($files as $file){
        //     /**
        //      * @var UploadedFile $file
        //      */
        //     $fileName = md5(uniqid()).'.'.$file->guessExtension();
        //     $save = $file->move($this->getParameter('brochures_directory'),$fileName);
        //     if($save){print('ziko');}
        //     else{print('non');}
        // }
        
        // return new Response($file->getClientOriginalName(). " " .$video->getClientOriginalName() );  

        return $this->redirectToRoute('home');
                 
                 
            
    }


    /**
     * @Route("/login", name="login")
     */
     public function login()
     {
 
         return $this->render('default/login.html.twig', [ 'controller_name' => 'video', ]);
     }
    
  


}
