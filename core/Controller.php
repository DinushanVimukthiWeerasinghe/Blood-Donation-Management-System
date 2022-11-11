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

    public static function render($view,$css='style',$js='index',$params = [],$subf='')
    {
        return Application::$app->view->renderView($view,$css,$js, $params,$subf);
    }

    public function registerMiddleware(Middleware $middleware): void
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