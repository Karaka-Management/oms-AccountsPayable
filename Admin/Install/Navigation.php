<?php
/**
 * Orange Management
 *
 * PHP Version 7.2
 *
 * @package    Modules\AccountsPayable\Admin\Install
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://website.orange-management.de
 */
declare(strict_types=1);

namespace Modules\AccountsPayable\Admin\Install;

use phpOMS\DataStorage\Database\DatabasePool;

/**
 * Navigation class.
 *
 * @package    Modules\AccountsPayable\Admin\Install
 * @license    OMS License 1.0
 * @link       http://website.orange-management.de
 * @since      1.0.0
 */
class Navigation
{
    /**
     * Install navigation providing
     *
     * @param string       $path   Module path
     * @param DatabasePool $dbPool Database pool for database interaction
     *
     * @return void
     *
     * @since  1.0.0
     */
    public static function install(string $path = null, DatabasePool $dbPool = null) : void
    {
        \Modules\Navigation\Admin\Installer::installExternal($dbPool, ['path' => __DIR__ . '/Navigation.install.json']);
    }
}
