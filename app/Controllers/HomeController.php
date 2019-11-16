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
    public function getOrder(Request $request, Response $response)
    {
        return $this->view->render($response, 'order.twig');


    }




    public function getRegister(Request $request, Response $response)
    {
        return $this->view->render($response, 'register.twig');
    }



    public function postRegister(Request $request, Response $response)
    {
        $data = $request->getParsedBody();


         $validation = $this->validator->validate($request, [
             'first_name' => v::notEmpty(),
             'last_name' => v::notEmpty(),

             'email' => v::noWhitespace()->notEmpty(),
             'mobile' => v::noWhitespace()->notEmpty(),
             'password' => v::noWhitespace()->notEmpty(),
             'cpassword' => v::notEmpty(),







         ]);



        if ($validation->failed()) {


            $this->flash->addMessage('error', 'Please fill all fields');
            return $response->withRedirect($this->router->pathFor('register'));
        }



            $user = User::firstOrCreate(['email' => $data['email']],
                [
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'email' => $data['email'],
                    'password' => $data['password'],
                    'contact_phone' => $data['mobile'],
                ]

            );






        if ($user->wasRecentlyCreated) {
            $this->flash->addMessage('success', 'Added Successfully');

            return $response->withRedirect($this->router->pathFor('register'));
        }



    }


    public function getLogin(Request $request, Response $response)
    {
        return $this->view->render($response, 'login.twig');
    }


    public function postLogin(Request $request, Response $response)
    {
        $data = $request->getParsedBody();
        $user = User::where('email', $data['email'])->first();
        $db_pass = $user['password'];
         $user_pass = $data['password'];

        if(password_verify($user_pass, $db_pass))
        {
            return $response->withRedirect($this->router->pathFor('home'));

        }else{
            $this->flash->addMessage('error','Username or password is incorrect');
            return $response->withRedirect($this->router->pathFor('login'));

        }


    }






    public function getProfile(Request $request, Response $response)
    {
        return $this->view->render($response, 'profile.twig');
    }





}





