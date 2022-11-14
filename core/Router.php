<?php
namespace Core;
use Exception;

class Router
{
    protected array $route= [];
    private Request $request;
    private Response $response;
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
    public function get($path,$callback): void
    {
        $this->route['get'][$path] = $callback;
    }
    public function post($path,$callback): void
    {
        $this->route['post'][$path] = $callback;
    }


    /**
     * @throws Exception
     */
    public function resolve()
    {
        $path=$this->request->getPath();
        $method=$this->request->method();

        if (str_contains($path, '/public/images/')) {
            $this->response->setStatusCode(200);
            $this->response->setContentType('image/jpeg');
            return $this->response->sendFile(Application::$ROOT_DIR.$path);
        }else if(str_contains($path, '/public/styles/')){
            $this->response->setStatusCode(200);
            $this->response->setContentType('text/css');
            $this->response->setContentLength(filesize(Application::$ROOT_DIR.$path));
            return $this->response->sendFile(Application::$ROOT_DIR.$path);
        }else if(str_contains($path, '/public/scripts/')){
            $this->response->setStatusCode(200);
            $this->response->setContentType('text/javascript');
            $this->response->setContentLength(filesize(Application::$ROOT_DIR.$path));
            return $this->response->sendFile(Application::$ROOT_DIR.$path);
        }


        $callback=$this->route[$method][$path] ?? false;
        if(!$callback){
            $this->response->setStatusCode(404);
            echo "Error 404";
            throw new Exception();
        }
//        if (is_string($callback)) {
//            Application::$app->view->renderView($callback);
//        }
        if(is_array($callback)){
            /** @var Controller $controller */
            $controller = new $callback[0]();
            Application::$app->controller=$controller;
            $controller->action =$callback[1];
            $callback[0]= $controller;
        }
        return call_user_func($callback,$this->request,$this->response);

    }

    private function loadAssets(mixed $path): void
    {

    }
}