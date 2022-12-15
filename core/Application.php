<?php
namespace Core;
use App\model\Email\BaseEmail;
use App\model\users\Campaign;
use App\model\users\User;
use Exception;

class Application
{
    public string $layout = 'main';
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;

    private ?User $user;
    public static Application $app;
    public Controller $controller;
    public Database $db;
    public View $view;
    public Session $session;
    public forbiddenRoute $forbiddenRoute;
    public BaseEmail $email;
    /**
     * @var \App\model\database\dbModel|false|mixed|object|\stdClass|null
     */

    public static function Redirect($path): void
    {
        Application::$app->response->redirect($path);

    }

    public static function getRole(): string
    {
        return self::$app->user->getRole();
    }

    /**
     * @return User
     */
    public function getUser(): User | null
    {
//        print_r($this->user);
        return $this->user;
    }

    public function isGuest(): bool
    {
        return $this->user === null;
    }

    public function getForbiddenRoutes(): forbiddenRoute
    {
        return $this->forbiddenRoute;
    }


    /**
     * @throws \PHPMailer\PHPMailer\Exception
     */
    public function __construct($path, array $config)
    {
        self::$app=$this;
        $this->view = new View();
        $this->forbiddenRoute = new forbiddenRoute();

        self::$ROOT_DIR = $path;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config['db']);
        $this->email = new BaseEmail($config['email']);

        if(isset($_SESSION['user']))
        {
            $this->user = User::findOne(['id' => $_SESSION['user']]);
            $this->campaign = Campaign::findOne(['id'=>$_SESSION['user']]);
        }
        else
        {
            $this->user = null;
        }
    }

    public function login(User $user): bool
    {
        $this->user=$user;
        $primaryKey=$user->primaryKey();

        $primaryValue=$user->getUid();
        //TODO Update the minutes to 30
        $this->session->set('user',$primaryValue,60);
        $this->session->setFlash('success','Welcome Back '.$user->getEmail());
        return true;
    }


    public function run(): void
    {
        try {
            echo self::$app->router->resolve();
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }
    public function logout(): void
    {
        $this->user = null;
        $this->session->remove('user');
    }


}