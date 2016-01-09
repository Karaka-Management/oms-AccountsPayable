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
/**
 * @var \phpOMS\Views\View $this
 */
echo $this->getData('nav')->render(); ?>

<section class="box w-25 floatLeft">
    <div class="inner centerText">
        <a href="">
            <p><i class="fa fa-5x fa-clock-o"></i></p>
            <p><?= $this->l11n->lang['AccountsPayable']['Due'] ?></p>
        </a>
    </div>
</section>

<section class="box w-25 floatLeft">
    <div class="inner centerText">
        <a href="">
            <p><i class="fa fa-5x fa-dollar"></i></p>
            <p><?= $this->l11n->lang['AccountsPayable']['DSO'] ?></p>
        </a>
    </div>
</section>

<section class="box w-25 floatLeft">
    <div class="inner centerText">
        <a href="">
            <p><i class="fa fa-5x fa-calendar"></i></p>
            <p><?= $this->l11n->lang['AccountsPayable']['AgePattern'] ?></p>
        </a>
    </div>
</section>
