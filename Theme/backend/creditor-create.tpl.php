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
echo $this->getData('nav')->render(); ?>

<section class="box w-33 floatLeft">
    <header><h1><?= $this->l11n->getText('AccountsPayable', 'Backend', 'AccountsPayable') ?></h1></header>
    <div class="inner">
        <form>
            <table class="layout w-100">
                <tr><td><label for="iStatus"><?= $this->l11n->getText('AccountsPayable', 'Backend', 'Status') ?></label>
                <tr><td><select id="iStatus" name="status">
                            <option>
                        </select>
                <tr><td><label for="iStatus"><?= $this->l11n->getText('AccountsPayable', 'Backend', 'DeliveryStatus') ?></label>
                <tr><td><select id="iStatus" name="status">
                            <option>
                        </select>
                <tr><td><label for="iId"><?= $this->l11n->getText(0, 'Backend', 'ID'); ?></label>
                <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input type="number" id="iId" min="1" name="id" required></span>
                <tr><td><label for="iName1"><?= $this->l11n->getText('AccountsPayable', 'Backend', 'Name1'); ?></label>
                <tr><td><input type="text" id="iName1" name="name1" placeholder="&#xf040;" required>
                <tr><td><label for="iName2"><?= $this->l11n->getText('AccountsPayable', 'Backend', 'Name2'); ?></label>
                <tr><td><input type="text" id="iName2" name="name2" placeholder="&#xf040;">
                <tr><td><label for="iName3"><?= $this->l11n->getText('AccountsPayable', 'Backend', 'Name3'); ?></label>
                <tr><td><input type="text" id="iName3" name="name3" placeholder="&#xf040;">
                <tr><td colspan="2"><input type="submit" value="<?= $this->l11n->getText(0, 'Backend', 'Create') ?>">
            </table>
        </form>
    </div>
</section>
