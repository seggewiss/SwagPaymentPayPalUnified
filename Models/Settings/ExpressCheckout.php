<?php
/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace SwagPaymentPayPalUnified\Models\Settings;

use Doctrine\ORM\Mapping as ORM;
use Shopware\Components\Model\ModelEntity;

/**
 * @ORM\Entity()
 * @ORM\Table(name="swag_payment_paypal_unified_settings_express")
 */
class ExpressCheckout extends ModelEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="shop_id", type="string", nullable=false)
     */
    private $shopId;

    /**
     * @var string
     * @ORM\Column(name="web_profile_id", type="string")
     */
    private $webProfileId;

    /**
     * @var bool
     * @ORM\Column(name="detail_active", type="boolean", nullable=false)
     */
    private $detailActive;

    /**
     * @var bool
     * @ORM\Column(name="cart_active", type="boolean", nullable=false)
     */
    private $cartActive;

    /**
     * @var bool
     * @ORM\Column(name="submit_cart", type="boolean", nullable=false)
     */
    private $submitCart;

    /**
     * @var string
     * @ORM\Column(name="button_style_color", type="string")
     */
    private $buttonStyleColor;

    /**
     * @var string
     * @ORM\Column(name="button_style_shape", type="string")
     */
    private $buttonStyleShape;

    /**
     * @var string
     * @ORM\Column(name="button_style_size", type="string")
     */
    private $buttonStyleSize;

    /**
     * @var int
     * @ORM\Column(name="intent", type="integer")
     */
    private $intent;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param string $shopId
     */
    public function setShopId($shopId)
    {
        $this->shopId = $shopId;
    }

    /**
     * @return string
     */
    public function getWebProfileId()
    {
        return $this->webProfileId;
    }

    /**
     * @param string $webProfileId
     */
    public function setWebProfileId($webProfileId)
    {
        $this->webProfileId = $webProfileId;
    }

    /**
     * @return bool
     */
    public function getDetailActive()
    {
        return $this->detailActive;
    }

    /**
     * @param bool $detailActive
     */
    public function setDetailActive($detailActive)
    {
        $this->detailActive = $detailActive;
    }

    /**
     * @return bool
     */
    public function getCartActive()
    {
        return $this->cartActive;
    }

    /**
     * @param bool $cartActive
     */
    public function setCartActive($cartActive)
    {
        $this->cartActive = $cartActive;
    }

    /**
     * @return bool
     */
    public function getSubmitCart()
    {
        return $this->submitCart;
    }

    /**
     * @param bool $submitCart
     */
    public function setSubmitCart($submitCart)
    {
        $this->submitCart = $submitCart;
    }

    /**
     * @return string
     */
    public function getButtonStyleColor()
    {
        return $this->buttonStyleColor;
    }

    /**
     * @param string $buttonStyleColor
     */
    public function setButtonStyleColor($buttonStyleColor)
    {
        $this->buttonStyleColor = $buttonStyleColor;
    }

    /**
     * @return string
     */
    public function getButtonStyleShape()
    {
        return $this->buttonStyleShape;
    }

    /**
     * @param string $buttonStyleShape
     */
    public function setButtonStyleShape($buttonStyleShape)
    {
        $this->buttonStyleShape = $buttonStyleShape;
    }

    /**
     * @return string
     */
    public function getButtonStyleSize()
    {
        return $this->buttonStyleSize;
    }

    /**
     * @param string $buttonStyleSize
     */
    public function setButtonStyleSize($buttonStyleSize)
    {
        $this->buttonStyleSize = $buttonStyleSize;
    }

    /**
     * @return int
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * @param int $intent
     */
    public function setIntent($intent)
    {
        $this->intent = $intent;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }
}