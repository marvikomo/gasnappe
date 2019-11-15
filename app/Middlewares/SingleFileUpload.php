<?php


namespace App\Middlewares;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Http\UploadedFile;

class SingleFileUpload
{



    /**
     * IPLo middleware invokable class
     *
     * @param ServerRequestInterface $req PSR7 request
     * @param ResponseInterface $res PSR7 response
     * @param callable $next Next middleware
     *
     * @return ResponseInterface
     */
    public function __invoke($req, $res, $next)
    {

        $files = $req->getUploadedFiles();






        $imageid = md5(time());

        if (array_key_exists('image', $files)) {
            $image = $files['image'];
            if (!is_null($image)) {
                if ($image->getError() === UPLOAD_ERR_OK) {
                    $basename = strtolower(pathinfo($image->getClientFilename(), PATHINFO_BASENAME));
                    $extension = strtolower(pathinfo($image->getClientFilename(), PATHINFO_EXTENSION));


                    if (strpos($basename, "index") !== true) {
                        $supported_image = array('gif', 'jpg', 'jpeg', 'png', 'pdf');
                    } else {
                        $response['msg'] = 'File format not supported!';
                    }
                } else {
                    $response['msg'] = 'Error uploading file!';
                }
                if (in_array($extension, $supported_image)) {
                    $imageid .= '.' . $extension;

                    echo $imagei = '../public/assets/images/'.$imageid;



                    $this->moveUploadedFile($imagei, $image);

                    $req = $req->withAttribute('path', $imageid);
                    return $next($req, $res);
                } else {
                    $response['msg'] = 'File format not supported2!';
                }
            } else {
                $response['msg'] = 'No file attached!';
            }
        } else {
            $response['msg'] = 'No file attached2!';
        }

        $response['error'] = true;
        $response['message'] = 'File uploading failed';

        return $res->withJson($response);
    }

    function moveUploadedFile($directory, UploadedFile $image)
    {
        $image->moveTo($directory);


    }
}