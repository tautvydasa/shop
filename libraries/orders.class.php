<?php

class orders {

    private $orders_table = 'orders';

    public function getOrdersList($limit = null, $offset = null) {
        $limitOffsetString = "";
        if (isset($limit)) {
            $limitOffsetString .= " LIMIT {$limit}";
        }
        if (isset($offset)) {
            $limitOffsetString .= " OFFSET {$offset}";
        }

        $query = "  SELECT *
					FROM `{$this->orders_table}`" . $limitOffsetString;
        $data = mysql::select($query);

        return $data;
    }

    public function getSortedOrdersList($limit = null, $offset = null, $sortType) {
        $limitOffsetString = "";
        if (isset($limit)) {
            $limitOffsetString .= " LIMIT {$limit}";
        }
        if (isset($offset)) {
            $limitOffsetString .= " OFFSET {$offset}";
        }

        $query = "  SELECT *
                                        FROM `{$this->orders_table}` ORDER BY " . mysql::escape($sortType) . $limitOffsetString;
        $data = mysql::select($query);

        return $data;
    }

    public function getOrdersListCount() {
        $query = "  SELECT COUNT(`id`) as `count`
					FROM `{$this->orders_table}`";
        $data = mysql::select($query);

        return $data[0]['count'];
    }

    public function insertOrder($data) {
        $query = "  INSERT INTO `{$this->orders_table}`
								(
									`firstName`,
									`lastName`,
                                                                        `email`,
									`phoneNumber`,
									`country`,
                                                                        `city`,
                                                                        `streetAndHouseNumber`,
                                                                        `postalCode`
								) 
								VALUES
								( 
									'" . mysql::escape($data['firstName']) . "',
									'" . mysql::escape($data['lastName']) . "',
									'" . mysql::escape($data['email']) . "',
									'" . mysql::escape($data['phoneNumber']) . "',
                                                                        '" . mysql::escape($data['country']) . "',
                                                                        '" . mysql::escape($data['city']) . "',
                                                                        '" . mysql::escape($data['streetAndHouseNumber']) . "',
                                                                        '" . mysql::escape($data['postalCode']) .
                "')";
        mysql::query($query);
    }

}
