<?php
namespace Core;
class Controller
{
    public string $action='';
    public string $layout = 'main';
    private array $middlewares = [];
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public static function render($view,$params = [],$subf='')
    {
        return Application::$app->view->renderView($view,$params,$subf);
    }


    public function registerMiddleware(BaseMiddleware $middleware): void
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