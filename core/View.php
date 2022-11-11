<?php
namespace Core;
class View
{
    public string $title='';
    public function renderView($view,$css,$js,$params=[],$subf=''): string
    {

        $viewContent=$this->renderOnlyView($view,$params,$subf);
        $layoutContent=$this->layoutContent();
        $renderCSS='<style>'.$this->RenderCSS($css).'</style>';
        $renderJS='<script>'.$this->RenderJS($js).'</script>';
        foreach ($params as $key=>$value)
        {
            $viewContent=str_replace('{{'.$key.'}}',$value,$viewContent);
        }
        $str= str_replace('{{content}}',$viewContent,$layoutContent);
        $str.=$renderCSS;
        $str.=$renderJS;
        return $str;
//        return $layoutContent.$viewContent;
    }



    private function renderContent($viewContent): array|bool|string
    {
        $layoutContent=$this->layoutContent();
        return str_replace('{{content}}',$viewContent,$layoutContent);
    }



    protected function layoutContent(): bool|string
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

    protected function renderOnlyView($view,$params,$subf=''): bool|string
    {
        foreach ($params as $key=>$value){
            $$key=$value;
        }
        ob_start();
        include_once Application::$ROOT_DIR ."/app/view/pages/$subf/$view.php";
        return ob_get_clean();
    }

    protected function RenderCSS($css): bool|string
    {
        ob_start();
        include_once Application::$ROOT_DIR ."/public/styles/".$css.".css";
        return ob_get_clean();
    }

    protected function RenderJS($js): bool|string
    {
        ob_start();
        include_once Application::$ROOT_DIR ."/public/scripts/".$js.".js";
        return ob_get_clean();
    }

}