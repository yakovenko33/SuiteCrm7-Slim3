<?php


namespace PureSlim\Core\Loader;


use Slim\App;
use PureSlim\src\AccountsModule\Infrastructure\Provider\AccountsProvider;

class ApplicationLocator
{
    /**
     * @var
     */
    private $app;

    /**
     * ApplicationLocator constructor.
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
    }

    /**
     * @param App $app
     * @throws \Throwable
     */
    public function registerProviders()
    {
        foreach($this->getProviders() as $provider) {
            (new $provider)->initProvider($this->app);
        }

        $this->app->run();
    }

    /**
     * @return string[]
     */
    private function getProviders()
    {
        return [
            AccountsProvider::class
        ];
    }
}