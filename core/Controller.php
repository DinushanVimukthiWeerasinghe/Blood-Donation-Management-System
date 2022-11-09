<?php
namespace Core;
class Controller
{
    public string $action='';
    public string $layout = 'main';
    protected array $middlewares = [];
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public static function render($view,$css, $params = [],$subf='')
    {
        return Application::$app->view->renderView($view,$css, $params,$subf);
    }
//    public static function setLayout($view,$css, $params = [],$subf='')
//    {
//        return Application::$app->view->renderView($view,$css, $params,$subf);
//    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[]=$middleware;
    }

    /**
     * @return array
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}