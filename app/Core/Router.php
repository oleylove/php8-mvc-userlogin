<?php
namespace App\Core;
use Exception;
use App\Core\Controller;

class Router
{
    protected $controller = 'welcome';
    protected $method = 'index';
    protected $params = [];

    protected $checkControllerError;
    public function __construct()
    {
        $url = $this->parseURL();

        if (!empty($url)) {

            $this->controller = $url[0];
            $this->checkControllerError = $url[0];
            unset($url[0]);

        }

        if (!file_exists("../app/Controllers/{$this->controller}.php")) {
            echo '<script type="text/javascript">confirm("No route defined for this url controller")</script >';
            $this->checkControllerError ='errors';
            $this->controller = 'errors';
            $this->method = 'pagenotfound';
        }
        
        require_once "../app/Controllers/{$this->controller}.php";
        $ControllerInstance = "\\App\\Controllers\\{$this->controller}";
        $this->controller = new $ControllerInstance;        

        if (!empty($url)) {
            //method
            if (isset($url[1])) {
                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                    
                }else{
                    echo '<script type="text/javascript">confirm("No route defined for this url method")</script >';
                    $this->checkControllerError ='errors';
                    $this->controller = 'errors';
                    $this->method = 'pagenotfound';
                    require_once "../app/Controllers/{$this->controller}.php";
                    $ControllerInstance = "\\App\\Controllers\\{$this->controller}";
                    $this->controller = new $ControllerInstance;                    
                    unset($url[1]); 
                }
            }
            //params
            $this->params = array_values($url);
        }
        
        if ($this->checkControllerError == 'errors' && $this->method == 'index') {
            $this->method = 'pagenotfound';
        }
        //controller & method, params
        call_user_func_array([$this->controller,$this->method],$this->params);

    }
    
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);    
            return $url;
        }
    }

}
