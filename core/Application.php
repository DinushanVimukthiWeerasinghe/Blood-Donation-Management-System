<?php
namespace Core;
use Exception;

class Application
{
    public string $layout = 'main';
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;

    public static Application $app;
    public Controller $controller;

    /**
     * @return Controller
     */
    public function getController(): Controller
    {
        return $this->controller;
    }

    /**
     * @param Controller $controller
     */
    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }

    /**
     * @return string
     */

    public Database $db;
    public View $view;
    public Session $session;


    public function __construct($path,array $config)
    {
        self::$app=$this;
        $this->view = new View();

        self::$ROOT_DIR = $path;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config['db']);
    }

    public function run()
    {
        try {
            echo self::$app->router->resolve();
        }catch (Exception $e){
            echo $e->getMessage();
        }

    }

}