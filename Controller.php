<?php
/**
 * Orange Management
 *
 * PHP Version 7.0
 *
 * @category   TBD
 * @package    TBD
 * @author     OMS Development Team <dev@oms.com>
 * @author     Dennis Eichhorn <d.eichhorn@oms.com>
 * @copyright  2013 Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
namespace Modules\AccountsPayable;

use Modules\Navigation\Models\Navigation;
use Modules\Navigation\Views\NavigationView;
use phpOMS\Contract\RenderableInterface;
use phpOMS\Message\RequestAbstract;
use phpOMS\Message\RequestDestination;
use phpOMS\Message\ResponseAbstract;
use phpOMS\Module\ModuleAbstract;
use phpOMS\Module\WebInterface;
use phpOMS\Views\View;
use phpOMS\Views\ViewLayout;

/**
 * Sales class.
 *
 * @category   Modules
 * @package    Modules\Accountsreceivable
 * @author     OMS Development Team <dev@oms.com>
 * @author     Dennis Eichhorn <d.eichhorn@oms.com>
 * @license    OMS License 1.0
 * @link       http://orange-management.com
 * @since      1.0.0
 */
class Controller extends ModuleAbstract implements WebInterface
{

    /**
     * Module name.
     *
     * @var \string
     * @since 1.0.0
     */
    protected static $module = 'AccountsPayable';

    /**
     * Localization files.
     *
     * @var \string
     * @since 1.0.0
     */
    protected static $localization = [
        RequestDestination::BACKEND => ['backend'],
    ];

    /**
     * Routing elements.
     *
     * @var array
     * @since 1.0.0
     */
    protected static $routes = [
        '^.*/backend/accounting/payable/list.*$'         => [['dest' => '\Modules\AccountsPayable\Controller:viewCreditorList', 'method' => 'GET', 'type' => ViewLayout::MAIN],],
        '^.*/backend/accounting/payable/create.*$'       => [['dest' => '\Modules\AccountsPayable\Controller:viewCreditorCreate', 'method' => 'GET', 'type' => ViewLayout::MAIN],],
        '^.*/backend/accounting/payable/profile.*$'      => [['dest' => '\Modules\AccountsPayable\Controller:viewCreditorProfile', 'method' => 'GET', 'type' => ViewLayout::MAIN],],
        '^.*/backend/accounting/payable/outstanding.*$'  => [['dest' => '\Modules\AccountsPayable\Controller:viewCreditorOutstanding', 'method' => 'GET', 'type' => ViewLayout::MAIN],],
        '^.*/backend/accounting/payable/age.*$'          => [['dest' => '\Modules\AccountsPayable\Controller:viewCreditorAge', 'method' => 'GET', 'type' => ViewLayout::MAIN],],
        '^.*/backend/accounting/payable/payable.*$'      => [['dest' => '\Modules\AccountsPayable\Controller:viewCreditorPayable', 'method' => 'GET', 'type' => ViewLayout::MAIN],],
        '^.*/backend/accounting/payable/journal/list.*$' => [['dest' => '\Modules\AccountsPayable\Controller:viewJournalList', 'method' => 'GET', 'type' => ViewLayout::MAIN],],
    ];

    /**
     * Providing.
     *
     * @var \string
     * @since 1.0.0
     */
    protected static $providing = [
        'Content',
    ];

    /**
     * Dependencies.
     *
     * @var \string
     * @since 1.0.0
     */
    protected static $dependencies = [
        'Media',
    ];

    /**
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param mixed            $data     Generic data
     *
     * @return RenderableInterface
     *
     * @since  1.0.0
     * @author Dennis Eichhorn <d.eichhorn@oms.com>
     */
    public function viewCreditorList(RequestAbstract $request, ResponseAbstract $response, $data = null) : RenderableInterface
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Modules/AccountsPayable/Theme/backend/creditor-list');
        $view->addData('nav', $this->createNavigation(1005001001, $request, $response));

        return $view;
    }

    /**
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param mixed            $data     Generic data
     *
     * @return RenderableInterface
     *
     * @since  1.0.0
     * @author Dennis Eichhorn <d.eichhorn@oms.com>
     */
    public function viewCreditorCreate(RequestAbstract $request, ResponseAbstract $response, $data = null) : RenderableInterface
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Modules/AccountsPayable/Theme/backend/creditor-create');
        $view->addData('nav', $this->createNavigation(1005001001, $request, $response));

        return $view;
    }

    /**
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param mixed            $data     Generic data
     *
     * @return RenderableInterface
     *
     * @since  1.0.0
     * @author Dennis Eichhorn <d.eichhorn@oms.com>
     */
    public function viewCreditorProfile(RequestAbstract $request, ResponseAbstract $response, $data = null) : RenderableInterface
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Modules/AccountsPayable/Theme/backend/creditor-profile');
        $view->addData('nav', $this->createNavigation(1005001001, $request, $response));

        return $view;
    }

    /**
     * @param int              $pageId   Page/parent Id for navigation
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     *
     * @return RenderableInterface
     *
     * @since  1.0.0
     * @author Dennis Eichhorn <d.eichhorn@oms.com>
     */
    private function createNavigation(\int $pageId, RequestAbstract $request, ResponseAbstract $response)
    {
        $nav     = Navigation::getInstance($request, $this->app->dbPool);
        $navView = new NavigationView($this->app, $request, $response);
        $navView->setTemplate('/Modules/Navigation/Theme/backend/mid');
        $navView->setNav($nav->getNav());
        $navView->setLanguage($request->getL11n()->language);
        $navView->setParent($pageId);

        return $navView;
    }
}
