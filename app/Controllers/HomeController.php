<?php
namespace App\Controllers;

use App\Controller\Controller;
use App\Models\User;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Http\UploadedFile;
use Respect\Validation\Validator as v;

class HomeController extends Controller
{

    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);


    }

    public function home(Request $request, Response $response)
    {
        return $this->view->render($response, 'home.twig');


    }
    public function getCategory(Request $request, Response $response)
    {
        $categories = User::get();

        return $this->view->render($response, 'category.twig',compact('categories'));


    }


    public function register(Request $request, Response $response)
    {
        return $this->view->render($response, 'register.twig');
    }

    public function register2(Request $request, Response $response, $args)
    {
       $type = $args['type'];
       if($type == 1)
       {
        return $this->view->render($response, 'register1.twig');
       }
        return $this->view->render($response, 'register2.twig');
    }

    public function postRegister(Request $request, Response $response)
    {
        $data = $request->getParsedBody();

        $files = $request->getUploadedFiles();
        $file1 = $files['image'];
        $file2 = $files['doc'];



         if ($file1->getError() === UPLOAD_ERR_OK) {

             $filename1 = $this->moveUploadedFile('../public/assets/img', $file1);
             // $filename2 = $this->moveUploadedFile('../public/assets/img',$file2);
         }

        if ($file2->getError() === UPLOAD_ERR_OK) {

            $filename2 = $this->moveUploadedFile('../public/assets/img', $file2);
            // $filename2 = $this->moveUploadedFile('../public/assets/img',$file2);
        }









     if($data['type'] == 1)
     {
         $validation = $this->validator->validate($request, [
             'name' => v::notEmpty(),

             'email' => v::noWhitespace()->notEmpty(),
             'contact_phone' => v::noWhitespace()->notEmpty(),
             'password' => v::noWhitespace()->notEmpty(),
             'confirm_password' => v::notEmpty(),
             'address' => v::notEmpty(),
             'title' => v::notEmpty(),
             'aos' => v::notEmpty(),
             'country' => v::not(v::equals('Select Country...')),
             'state' => v::not(v::equals('Select State...')),
             'city' => v::not(v::equals('Select City...')),
             'land_mark' => v::notEmpty(),
             'lga' => v::notEmpty(),






         ]);

         $type = 1;



     }else{
         $validation = $this->validator->validate($request, [

             'bname' => v::notEmpty(),
             'email' => v::noWhitespace()->notEmpty(),
             'contact_phone' => v::noWhitespace()->notEmpty(),
             'password' => v::noWhitespace()->notEmpty(),
             'confirm_password' => v::notEmpty(),
             'aos' => v::notEmpty(),
             'address' => v::notEmpty(),
             'country' => v::not(v::equals('Select Country...')),
             'state' => v::not(v::equals('Select State...')),
             'city' => v::not(v::equals('Select City...')),
             'land_mark' => v::notEmpty(),
             'lga' => v::notEmpty(),






         ]);
         $type = 2;

     }

        if ($validation->failed()) {
            dump($validation);


           // return $response->withRedirect($this->router->pathFor('register'));
        }


        if($type == 1)
        {
            $user = User::firstOrCreate(['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'number' => $data['contact_phone'],
                    'title' => $data['type'],
                    'country' => $data['country'],
                     'landmark' => $data['land_mark'],
                    'state' => $data['state'],
                    'LGA' => $data['lga'],
                    'picture' =>   $filename1,
                    'specialty' => $data['aos'],
                    'type' => $data['type'],
                    'document' =>   $filename2,
                    'year_of_call' => $data['yoc'],
                    'enrollment_number' => $data['enrollment_number'],


                    'password' => password_hash($data['password'], PASSWORD_DEFAULT),

                ]

            );



        }else{
            $user = User::firstOrCreate(['email' => $data['email']],
                [
                    'business_name' => $data['bname'],
                    'email' => $data['email'],
                    'number' => $data['contact_phone'],
                    'country' => $data['country'],
                    'landmark' => $data['land_mark'],
                    'state' => $data['state'],
                    'LGA' => $data['lga'],
                    'picture' =>   $filename1,
                    'specialty' => $data['aos'],
                    'type' => $data['type'],
                    'document' =>   $filename2,
                    'year_of_call' => $data['yoc'],
                    'enrollment_number' => $data['enrollment_number'],
                    'password' => password_hash($data['password'], PASSWORD_DEFAULT),

                ]

            );


        }

        if ($user->wasRecentlyCreated) {

            return $response->withRedirect($this->router->pathFor('register'));
        }



    }


    public function moveUploadedFile($directory, UploadedFile $uploadedFile)
    {
        $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
        $basename = bin2hex(random_bytes(8)); // see http://php.net/manual/en/function.random-bytes.php
        $filename = sprintf('%s.%0.8s', $basename, $extension);

        $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);


        return $filename;
    }

    public function getProfile(Request $request, Response $response)
    {
        return $this->view->render($response, 'profile.twig');
    }





}





