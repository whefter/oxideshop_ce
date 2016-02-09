<?php
/**
 * This file is part of OXID eShop Community Edition.
 *
 * OXID eShop Community Edition is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eShop Community Edition is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2016
 * @version   OXID eShop CE
 */

/**
 * Testing oxuserlist class
 */
class Unit_Models_oxuserlistTest extends OxidTestCase
{
    /**
     * Initialize the fixture.
     *
     * @return null
     */
    public function setUp()
    {
        parent::setUp();
        $oUser = oxNew('oxUser');
        $oUser->setId('user1');
        $oUser->oxuser__oxactive = new oxField(1, oxField::T_RAW);
        $oUser->oxuser__oxshopid = new oxField($this->getConfig()->getBaseShopId(), oxField::T_RAW);
        $oUser->oxuser__oxusername = new oxField('user1', oxField::T_RAW);
        $oUser->save();


        $oUser = oxNew('oxUser');
        $oUser->setId('user2');
        $oUser->oxuser__oxactive = new oxField(1, oxField::T_RAW);
        $oUser->oxuser__oxshopid = new oxField(2, oxField::T_RAW);
        $oUser->oxuser__oxusername = new oxField('user2', oxField::T_RAW);
        $oUser->save();

        $oBasket = oxNew('OxUserBasket');
        $oBasket->setId("testUserBasket");
        $oBasket->oxuserbaskets__oxuserid = new oxField('user2', oxField::T_RAW);
        $oBasket->oxuserbaskets__oxtitle = new oxField('wishlist', oxField::T_RAW);
        $oBasket->oxuserbaskets__oxpublic = new oxField(1, oxField::T_RAW);
        $oBasket->save();

        $oBasketItem = oxNew('OxUserBasketItem');
        $oBasketItem->setId("testUserBasketItem");
        $oBasketItem->oxuserbasketitems__oxbasketid = new oxField('testUserBasket', oxField::T_RAW);
        $oBasketItem->oxuserbasketitems__oxamount = new oxField(1, oxField::T_RAW);
        $oBasketItem->oxuserbasketitems__oxartid = new oxField('test', oxField::T_RAW);
        $oBasketItem->save();

        $oBasket = oxNew('OxUserBasket');
        $oBasket->setId("testUserBasket2");
        $oBasket->oxuserbaskets__oxuserid = new oxField('user1', oxField::T_RAW);
        $oBasket->oxuserbaskets__oxtitle = new oxField('wishlist', oxField::T_RAW);
        $oBasket->oxuserbaskets__oxpublic = new oxField(1, oxField::T_RAW);
        $oBasket->save();

        $oBasketItem = oxNew('OxUserBasketItem');
        $oBasketItem->setId("testUserBasketItem2");
        $oBasketItem->oxuserbasketitems__oxbasketid = new oxField('testUserBasket2', oxField::T_RAW);
        $oBasketItem->oxuserbasketitems__oxamount = new oxField(1, oxField::T_RAW);
        $oBasketItem->oxuserbasketitems__oxartid = new oxField('test', oxField::T_RAW);
        $oBasketItem->save();
    }

    /**
     * Tear down the fixture.
     *
     * @return null
     */
    public function tearDown()
    {
        $oUser = oxNew('oxUser');
        $oUser->delete('user1');
        $oUser->delete('user2');
        $oUserBasket = oxNew('oxUserBasket');
        $oUserBasket->delete("testUserBasket");
        $oUserBasket->delete("testUserBasket2");
        $oUserBasket = oxNew('OxUserBasketItem');
        $oUserBasket->delete("testUserBasketItem");
        $oUserBasket->delete("testUserBasketItem2");

        parent::tearDown();
    }

    public function testUserListLoadingDisabledShopcheck()
    {
        $oUser = oxNew('oxUser');
        $oUserList = oxNew('oxUserList');
        $oUserList->selectString($oUser->buildSelectString());

        $this->assertEquals('8', $oUserList->count());
    }

    public function testLoadWishlistUsersExactUser()
    {
        // selecting count from DB
        $oUserList = oxNew('oxUserList');
        $oUserList->loadWishlistUsers('user2');
        $this->assertEquals(1, $oUserList->count());
    }

    public function testLoadWishlistUsers()
    {
        // selecting count from DB
        $oUserList = oxNew('oxUserList');
        $oUserList->loadWishlistUsers('user');
        $this->assertEquals(2, $oUserList->count());
    }

    public function testLoadWishlistUsersEmptySearch()
    {
        // selecting count from DB
        $oUserList = oxNew('oxUserList');
        $oUserList->loadWishlistUsers(null);
        $this->assertEquals(0, $oUserList->count());
    }
}
