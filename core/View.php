<?php
namespace Core;
class View
{
    public string $title='';
    public function renderView($view,$css,$params=[],$subf='')
    {
        $viewContent=$this->renderOnlyView($view,$params,$subf);
        $layoutContent=$this->layoutContent();
        foreach ($params as $key=>$value)
        {
            $viewContent=str_replace('{{'.$key.'}}',$value,$viewContent);
        }
        $str = str_replace('{{content}}',$viewContent,$layoutContent);
        $css = "<style>".$this->RenderCSS($css)."</style>";
        $str.=$css;
         return $str;
//        return $layoutContent.$viewContent;
    }


    private function renderContent($viewContent)
    {
        $layoutContent=$this->layoutContent();
        return str_replace('{{content}}',$viewContent,$layoutContent);

    }


    protected function layoutContent()
    {
        $layout=Application::$app->layout;
        if(Application::$app->controller)
        {
            $layout=Application::$app->controller->layout;
        }
        ob_start();
        include_once Application::$ROOT_DIR ."/app/view/layout/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view,$params,$subf='')
    {
        foreach ($params as $key=>$value){
            $$key=$value;
        }
        ob_start();
        include_once Application::$ROOT_DIR ."/app/view/pages/$subf/$view.php";
        return ob_get_clean();
    }

    protected function RenderCSS($css):bool|string
    {
        ob_start();
        include_once Application::$ROOT_DIR."/public/styles/".$css.".css";
        return ob_get_clean();
    }

//    protected function RenderSCRIPT($script)
//    {
//        ob_start();
//        include_once Application::$ROOT_DIR."/public/script/".$script.".css";
//        return ob_get_clean();
//    }
}