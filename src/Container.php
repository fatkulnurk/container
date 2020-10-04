<?php

namespace Fatkulnurk\Container;

use Fatkulnurk\Container\Exception;
use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    private $version = '0.1.0';
    protected $container = [];
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new Container();
        }

        return self::$instance;
    }

    public function has($id = ''): bool
    {
        return isset($this->container[$id]);
    }

    public function set($id, $value = null)
    {
        $value ??= null;
        $this->container[$id] = $value;
    }

    public function get($id)
    {
        if ($this->has($id)) {
            return $this->container[$id];
        }

        throw new Exception\NotFoundException();
    }

    public function destroy($id)
    {
        if ($this->has($id)) {
            unset($this->container[$id]);
        }

        throw new Exception\NotFoundException();
    }

    public function delete($id)
    {
        try {
            $this->destroy($id);
        } catch (Exception\NotFoundException $e) {
            die($e);
        }
    }

    public function version(): string
    {
        return $this->version;
    }
}

// Container::getInstance()->get('example');
// Container::getInstance()->has('example');
// Container::getInstance()->delete('example');
