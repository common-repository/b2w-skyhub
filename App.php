<?php

/**
 * BSeller - B2W Companhia Digital
 *
 * DISCLAIMER
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @copyright     Copyright (c) 2017 B2W Companhia Digital. (http://www.bseller.com.br/)
 * Access https://ajuda.skyhub.com.br/hc/pt-br/requests/new for questions and other requests.
 */

use B2W\SkyHub\View\Admin\Admin;
use SkyHub\Api\Service\ServiceMultipart;

/**
 * App class
 */
final class App
{
    const LOG_FILE_DEFAULT   = 'woocommerce-b2w-skyhub.log';
    const LOG_FILE_EXCEPTION = 'woocommerce-b2w-skyhub-exception.log';

    const REPOSITORY_PRODUCT           = 'product';
    const REPOSITORY_PRODUCT_API       = 'product/product';
    const REPOSITORY_CATEGORY          = 'category';
    const REPOSITORY_PRODUCT_ATTRIBUTE = 'product/attribute';
    const REPOSITORY_PRODUCT_VARIATION = 'product/variation';
    const REPOSITORY_CUSTOMER          = 'customer';
    const REPOSITORY_ORDER             = 'order';
    const REPOSITORY_ORDER_ITEM        = 'order/item';
    const REPOSITORY_ORDER_ADDRESS     = 'order/address';
    const REPOSITORY_ORDER_STATUS      = 'order/status';
    const REPOSITORY_QUEUE             = 'queue';

    /** @var \SkyHub\Api */
    static protected $_api = null;

    /** @var array */
    static protected $_helpers = array();
    /**
     * @var array
     */
    static protected $_transformers = array();
    static protected $_repositories = array();

    /**
     * @return App|bool
     * @throws Exception
     */
    static public function run()
    {
        static $instance = false;

        if ($instance === false) {
            $instance = new static();
        }

        return $instance;
    }

    /**
     * @return mixed
     */
    static public function version()
    {
        $data = get_plugin_data(self::getBaseDir() . DS . 'woocommerce-b2w-skyhub.php');
        return $data['Version'];
    }

    /**
     * @param $entity
     * @param string $type
     * @return mixed
     * @throws \B2W\SkyHub\Exception\Data\RepositoryNotFound
     */
    static public function repository($entity, $type = 'db')
    {
        $name = 'repository/' . strtolower($entity) . '_' . strtolower($type) . '_repository';
        $repo = self::getClassName($name);

        if (!class_exists($repo)) {
            throw new \B2W\SkyHub\Exception\Data\RepositoryNotFound($repo);
        }

        if (!isset(self::$_repositories[$repo])) {
            self::$_repositories[$repo] = new $repo();
        }

        return self::$_repositories[$repo];
    }

    /**
     * @param $entity
     * @return mixed
     * @throws \B2W\SkyHub\Exception\Data\RepositoryNotFound
     */
    static public function apiRepository($entity)
    {
        return self::repository($entity, 'api');
    }

    /**
     * @param $name
     * @return mixed
     * @throws \B2W\SkyHub\Exception\Helper\HelperNotFound
     */
    static public function helper($name)
    {
        $className = self::getClassName($name, 'helper');

        if (!class_exists($className)) {
            throw new \B2W\SkyHub\Exception\Helper\HelperNotFound($className);
        }

        if (!isset(self::$_helpers[$className])) {
            self::$_helpers[$className] = new $className();
        }

        return self::$_helpers[$className];
    }

    /**
     * @param $path
     * @param null $key
     * @return array|mixed|null
     */
    static public function config($path, $key = null)
    {
        $config = \B2W\SkyHub\Model\Config::instantiate();
        return $config::config($path, $key);
    }

    /**
     * @return string
     */
    static public function getBaseDir()
    {
        return __DIR__;
    }

    /**
     * @param $eventName
     * @param $params
     * @return bool|mixed
     */
    static public function dispatchEvent($eventName, $params)
    {
        //default wordpress
        do_action($eventName, $params);
        return;
    }

    /**
     * @param $message
     * @param null $level
     * @param null $file
     * @param bool $force
     */
    static public function log($message, $level = null, $file = null, $force = false)
    {
        $level  = $level ?: Monolog\Logger::INFO;
        $file   = $file?: self::LOG_FILE_DEFAULT;
        $path   = __DIR__ . DS . 'log' . DS;

        if (is_array($message)) {
            $message = print_r($message, true);
        }

        $formatter = new Monolog\Formatter\LineFormatter(
            null,
            null,
            true,
            true
        );

        $handler = new \Monolog\Handler\RotatingFileHandler($path . $file);
        $handler->setFormatter($formatter);

        $logger = new Monolog\Logger('woocommerce-b2w-skyhub');
        $logger->pushHandler($handler);
        $logger->log($level, $message);

        return;
    }

    /**
     * @param $message
     * @param null $level
     */
    static public function logDb($message, $level = null)
    {
        if (!$message) {
            return false;
        }

        $log = new \B2W\SkyHub\Model\Entity\LogEntity();
        $log->setMessage($message);
        $log->setLevel($level);
        $log->setDateCreate(date('Y-m-d H:i-s'));
        $log->save();
    }

    /**
     * @param Exception $e
     */
    static public function logException(Exception $e)
    {
        /**
         * If you change log in file and with trace. You can to use the function:
         * static::log("\n" . $e->__toString(), Monolog\Logger::ERROR, "log-skyhub.log");
         */
        static::logDb($e->getMessage(), Monolog\Logger::ERROR);
    }

    /**
     * @return \SkyHub\Api
     */
    static public function api()
    {
        if (is_null(static::$_api)) {
            $api = \B2W\SkyHub\Model\Api::instantiate();
            $api->setService(null);
            static::$_api = $api->api();
        }

        return static::$_api;
    }

    /**
     * @return \SkyHub\Api
     */
    static public function apiMultiPart()
    {
        if (is_null(static::$_api)) {
            $api = \B2W\SkyHub\Model\Api::instantiate();
            $api->setService(new ServiceMultipart(null));
            static::$_api = $api->api();
        }

        return static::$_api;
    }

    /**
     * @param $path
     * @param string $type
     * @return bool|string
     */
    static public function getClassName($path, $type = 'model')
    {
        $path       = trim($type, '/') . '/' . $path;
        $name       = implode(
            '\\',
            array_map(
                'ucfirst', array_map(
                    function($arrayPart) {
                        return implode(
                            '',
                            array_map(
                                'ucfirst',
                                explode('_', $arrayPart)
                            )
                        );
                    }, explode('/', $path)
                )
            )
        );

        return '\B2W\SkyHub\\' . $name;
    }

    /**
     * App constructor.
     * @throws Exception
     */
    private function __construct()
    {
        spl_autoload_register(array($this, 'autoload'));
        $this->displayErrorsPHP();
        $this->registerObservers();
        $this->registerFilters();
        $this->registerCronJobs();
        $this->translate();
        $this->init();

        return $this;
    }

    /**
     * Display errors PHP
     *
     * @return void
     */
    protected function displayErrorsPHP()
    {
        $settingsAPI = new \B2W\SkyHub\Model\Entity\SettingsApiEntity();
        $settingsAPI = $settingsAPI->map();
        if (!$settingsAPI->getDisplayErrorsPHP()) {
            return true;
        }

        $post = $_POST;
        if (isset($post['displayErrorsPHP']) && $post['displayErrorsPHP'] == '0') {
            return true;
        }

        set_error_handler(function($errno, $str, $file, $line) {
            $style = 'background-color:#f5b7b1;margin-left:200px;margin-top:20px;';
            $style .= 'border:1px solid;border-color:red;padding:5px;margin-right:25px;';
            $erro = "<div style='$style'>";
            $erro .= "Número do Erro: <b>$errno</b> <br>";
            $erro .= "Arquivo: <b>$file</b> <br>";
            $erro .= "Linhe: <b>$line</b> <br>";
            $erro .= "Menssagem de erro: <b>$str</b>";
            $erro .= "</div>";
            echo $erro;
        });
    }

    /**
     * Translate words
     */
    protected function translate()
    {
        load_plugin_textdomain( Admin::DOMAIN, false, basename(__DIR__).'/I18n/languages' );
    }

    /**
     * @param $className
     * @return $this
     */
    public function autoload($className)
    {
        if (class_exists($className)) {
            return $this;
        }

        $file   = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
        $path   = __DIR__ . DIRECTORY_SEPARATOR . $file;

        if (file_exists($path)) {
            require_once($path);
        }

        return $this;
    }


    /**
     * @return $this
     */
    private function __clone()
    {
        return $this;
    }

    /**
     * Validate data to registers
     * @return Bollean
    */
    private function _validateRegisters($param)
    {
        if (
            !isset($param['event']) || empty($param['event'])
            || !isset($param['class']) || empty($param['class'])
            || !isset($param['method']) || empty($param['method'])
        ) {
            return false;
        }

        $class = $param['class'];

        if (!class_exists($class)) {
            throw new Exception('Class ' . $class . ' dont exists');
        }

        $onlyAdmin = isset($param['admin']) && $param['admin'] == true;

        if ($onlyAdmin && !is_admin()) {
            return false;
        }
        return true;
    }

    /**
     * @throws Exception
     */
    protected function registerObservers()
    {
        foreach (self::config('observers') as $observer) {
            if (!$this->_validateRegisters($observer)) {
                continue;
            }

            add_action(
                $observer['event'], 
                array(
                    new $observer['class'](), 
                    $observer['method']
                ), 
                10, 
                10
            );
        }
    }

    /**
     * @throws Exception
     */
    protected function registerFilters()
    {
        foreach (self::config('filters') as $filters) {
            if (!$this->_validateRegisters($filters)) {
                continue;
            }

            add_filter(
                $filters['event'],
                array(
                    $filters['class'],
                    $filters['method']
                )
            );
        }
    }

    /**
     * @throws Exception
     * 
     * @return Boolean
     */
    protected function registerCronJobs()
    {
        $jobs = new B2W\SkyHub\Model\Cron\Jobs();
        $jobs->registerCronJobs();
    }


    /**
     * Executed when module is activated in admin
     */
    public function activate()
    {
        //FUNCTION THAT RUNS WHEN PLUGIN IS ACTIVATED IN ADMIN
        $queue = new B2W\SkyHub\Model\Setup\Queue();
        $queue->install();

        $log = new B2W\SkyHub\Model\Setup\Log();
        $log->install();

        $product = new B2W\SkyHub\Model\SetupData\Product();
        $product->install();

        $jobs = new B2W\SkyHub\Model\Cron\Jobs();
        $jobs->registerCronJobs(true);
    }

    /**
     * Executed when module is desactived in admin
     */
    public function deactivate()
    {
        $jobs = new B2W\SkyHub\Model\Cron\Jobs();
        $jobs->unsetCronJobs();
    }

    /**
     * @return $this
     * @throws Exception
     */
    protected function init()
    {
        return $this;
    }
}
