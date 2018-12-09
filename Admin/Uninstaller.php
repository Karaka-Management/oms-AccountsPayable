<?php
/**
 * Orange Management
 *
 * PHP Version 7.2
 *
 * @package    Modules\AccountsPayable\Admin
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://website.orange-management.de
 */
declare(strict_types=1);

namespace Modules\AccountsPayable\Admin;

use phpOMS\DataStorage\Database\DatabasePool;
use phpOMS\DataStorage\Database\Schema\Builder;
use phpOMS\Module\InfoManager;
use phpOMS\Module\UninstallerAbstract;

/**
 * Navigation class.
 *
 * @package    Modules\AccountsPayable\Admin
 * @license    OMS License 1.0
 * @link       http://website.orange-management.de
 * @since      1.0.0
 */
class Uninstaller extends UninstallerAbstract
{

    /**
     * {@inheritdoc}
     */
    public static function uninstall(DatabasePool $dbPool, InfoManager $info) : void
    {
        parent::uninstall($dbPool, $info);

        $query = new Builder($dbPool->get());

        $query->prefix($dbPool->get()->getPrefix())->drop(
            'accounts_payable_payment',
            'accounts_payable'
        );

        $dbPool->get()->con->prepare($query->toSql())->execute();
    }
}
