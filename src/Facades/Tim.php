<?php

declare(strict_types=1);

namespace Chenjiacheng\LaravelTim\Facades;

use Chenjiacheng\Tim\Service\Account;
use Chenjiacheng\Tim\Service\Contact;
use Chenjiacheng\Tim\Service\Group;
use Chenjiacheng\Tim\Service\Message;
use Chenjiacheng\Tim\Service\Operate;
use Chenjiacheng\Tim\Service\Overall;
use Chenjiacheng\Tim\Service\Profile;
use Chenjiacheng\Tim\Service\Push;
use Chenjiacheng\Tim\Service\Sns;
use Illuminate\Support\Facades\Facade;

class Tim extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'tim';
    }

    /**
     * Return the facade accessor.
     *
     * @return Account
     */
    public static function account(): Account
    {
        return app('tim')->account;
    }

    /**
     * Return the facade accessor.
     *
     * @return Contact
     */
    public static function contact(): Contact
    {
        return app('tim')->contact;
    }

    /**
     * Return the facade accessor.
     *
     * @return Group
     */
    public static function group(): Group
    {
        return app('tim')->group;
    }

    /**
     * Return the facade accessor.
     *
     * @return Message
     */
    public static function message(): Message
    {
        return app('tim')->message;
    }

    /**
     * Return the facade accessor.
     *
     * @return Operate
     */
    public static function operate(): Operate
    {
        return app('tim')->operate;
    }

    /**
     * Return the facade accessor.
     *
     * @return Overall
     */
    public static function overall(): Overall
    {
        return app('tim')->overall;
    }

    /**
     * Return the facade accessor.
     *
     * @return Profile
     */
    public static function profile(): Profile
    {
        return app('tim')->profile;
    }

    /**
     * Return the facade accessor.
     *
     * @return Push
     */
    public static function push(): Push
    {
        return app('tim')->push;
    }

    /**
     * Return the facade accessor.
     *
     * @return Sns
     */
    public static function sns(): Sns
    {
        return app('tim')->sns;
    }
}