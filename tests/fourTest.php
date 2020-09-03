<?php
require 'vendor/autoload.php';

    class fourTest extends PHPUnit\Extensions\Selenium2TestCase
    {

        public static $browsers = array(
          array(
            'host'=> 'hub.browserstack.com',
            'port' => 80,
            "browserName" => "chrome",
            'desiredCapabilities' => array(
                "os" => "Windows",
                "os_version" => "10",
                "browser_version" => "latest",
                "browserstack.user" => "BROWSERSTACK_USERNAME",
                "browserstack.key" => "BROWSERSTACK_ACCESS_KEY",
                "project" => "PHPUnit Paratest Samples ",
                "build" => "PHPUnit Paratest v1"
            )
          ),
          array(
            'host'=> 'hub.browserstack.com',
            'port' => 80,
            "browserName" => "firefox",
            'desiredCapabilities' => array(
                "os" => "Windows",
                "os_version" => "10",
                "browser_version" => "latest",
                "browserstack.user" => "BROWSERSTACK_USERNAME",
                "browserstack.key" => "BROWSERSTACK_ACCESS_KEY",
                "project" => "PHPUnit Paratest Samples ",
                "build" => "PHPUnit Paratest v1"
            )
          )
        );

        protected function setUp(): void
        {
            // $this->setBrowser('chrome');
            $this->setBrowserUrl('http://www.example.com/');
        }

        public function testTitle()
        {
            $this->url('http://www.example.com/');
            // sleep(10);
            $this->assertEquals('Example Domain', $this->title());
        }

    }
?>