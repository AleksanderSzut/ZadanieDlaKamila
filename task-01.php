<?php

    /*1.a*/

    /**
     * Class shop
     */
    class shop
    {
        const shopName = "Sałatki u Cezara";
        /**
         * @var array|array[]
         */
        private array $prices =
            array(
                "apple" => array(4.30, 'jabłek'),
                "pear" => array(6, 'gruszek'),
                "tomato" => array(7, 'pomidorów')
            );

        private int $toPay = 0;


        /**
         * @param string $name
         * @param int $count
         * @param int|null $toPayForThis
         * @return bool
         */
        public function addToBasket(string $name, int $count, ?int &$toPayForThis = null):bool
        {
            if(array_key_exists($name, $this->prices))
            {
                $toPayForThis = $this->prices[$name][0] * $count;
                $this->toPay += $toPayForThis;

                return true;
            }
            else {
                return false;
            }
        }
        /**
         * @return bool|string
         */
        public function generateSummary()
        {
            if($this->toPay)
                return 'Koszt zakupów wynosi: '. $this->toPay . 'zł. Pozdrawiamy '. self::shopName;
            else
                return false;
        }
    }

    $shopObj = new shop();

    $shopObj->addToBasket('apple', 3);
    $shopObj->addToBasket('pear', 2);
    $shopObj->addToBasket('tomato', 4);

    echo $shopObj->generateSummary();

