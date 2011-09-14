<?php

class AdminsController extends AppController {

    var $name = 'Admins';

    function beforeFilter() {
        parent::beforeFilter();
    }

    function index() {
        $this->set("title_for_layout", "Welcome GourmetGuru Admin!");

        $all = "";
        //$all .= $this->_genAddrs(array(11,13,14,15,16,17,18,19));
        //$all .= $this->_genCP(31, 36);
        //$all .= $this->_genPM(31, 36);
        $tmp = array();
        for ($i = 37; $i <= 50; $i++){
            $tmp[] = $i;
        }
        //$all .= $this->_genStore($tmp);
        $this->set('var', $all);
    }

    // owners are: 22, 23, 27
    function _genStore($ids) {
        // INSERT IGNORE INTO `project`.`payment_methods` (`id`, `customer_pref_id`, `payment_type_id`, `name`, `cc_number`, `verification_number`, `expiry`, `created`, `modified`) VALUES (
        // NULL, '31', '1', 'cust4', '123456789012', '1234', '2012-07-26', NOW(), NOW()
        // );
        $all = "INSERT INTO `stores` (`id`, `user_id`, `cuisine_type_id`, `name`, `description`, `phone`, `address`, `city`, `province`, `postal`, `country`, `avg_rating`, `dine_in`, `takeout`, `delivery`, `open_hrs`, `close_hrs`, `created`, `modified`) VALUES <br/>";
        foreach ($ids as $id) {
            $amt = rand(1, 5);
            $stores = array();
            for ($i = 1; $i <= $amt; $i++) {
                $types = rand(1, 12);
                $stores[] = $types;
            }
            foreach ($stores as $t) {
                $gen = "( ";
                $val = explode(',', "NULL ,'22','5','Store of User 22 Cusine 5','We serve cuisine 6!','6042998888' ,'Store 22/5 University Dr.','Langley','BC','V3K 3V9','Canada', NULL , '0', '1', '0', '09:00:00', '22:00:00', NOW( ) , NOW( )");
                $size = count($val);
                $info = array();
                for ($n = 0; $n < $size; $n++) {
                    $c = $val[$n];
                    $rCity = $this->_randCity();
                    switch ($n) {
                        case 1:
                            // owner ids
                            $info[] = "'$id'";
                            break;
                        case 2:
                            // cuisne type
                            $info[] = "'$t'";
                            break;
                        case 3:
                            // store name
                            $info[] = "'Store of User $id  Cusine $t'";
                            break;
                        case 4:
                            // notes
                            $info[] = "'We serve cuisine $t'";
                            break;
                        case 6:
                            // store addr
                            $info[] = "'Store $id/$t University Dr.'";
                            break;
                        case 7:
                            $info[] = "'$rCity'";
                            break;
                        case 8:
                            $info[] = "'BC'";
                            break;
                        case 9:
                            $info[] = "'V3K 3V9'";
                            break;
                        case 10:
                            $info[] = "'Canada'";
                            break;
                        default:
                            $info[] = "$c";
                            break;
                    }
                }
                $info = implode(',', $info);
                $gen .= $info . "),<br/>";
                $all .=$gen;
            }
        }
        return $all;
    }

    // make new payment method for each customer
    function _genPM($cpstart, $cpend) {
        // INSERT IGNORE INTO `project`.`payment_methods` (`id`, `customer_pref_id`, `payment_type_id`, `name`, `cc_number`, `verification_number`, `expiry`, `created`, `modified`) VALUES (
        // NULL, '31', '1', 'cust4', '123456789012', '1234', '2012-07-26', NOW(), NOW()
        // );
        $all = "INSERT IGNORE INTO `project`.`payment_methods` (`id`, `customer_pref_id`, `payment_type_id`, `name`, `cc_number`, `verification_number`, `expiry`, `created`, `modified`) VALUES ";
        $type = array(1, 2, 3);
        foreach ($type as $t) {

            $all .= "-- Type $t <br/><br/>";
            for ($m = $cpstart; $m <= $cpend; $m++) {
                $gen = "( ";
                $val = explode(',', "NULL, '31', '1', 'cust4', '123456789012', '1234', '2012-07-26', NOW(), NOW()");
                $size = count($val);
                $info = array();
                $id = $cpstart - ($cpstart - $m);
                for ($n = 0; $n < $size; $n++) {
                    $c = $val[$n];
                    switch ($n) {
                        case 1:
                            // list of user ids
                            $info[] = "'$id'";
                            break;
                        case 2:
                            // payment type:
                            // 1: visa, 2: mc, 3:american
                            $info[] = "'$t'";
                            break;
                        case 3:
                            $tmp = rand(1200, 3000);
                            $info[] = "'Name of Customer Pref $id'";
                            break;
                        case 4:
                            $tmp = rand(10000000, 99999999);
                            $info[] = "'$t" . "000" . "$tmp'";
                            break;
                        case 5:
                            $tmp = rand(1000, 9999);
                            $info[] = "'$tmp'";
                            break;
                        default:
                            $info[] = "$c";
                            break;
                    }
                }
                $info = implode(',', $info);
                $gen .= $info . "),<br/>";
                $all .=$gen;
            }
        }
        return $all;
    }

    function _genCP($startID, $endID) {
        // INSERT INTO `project`.`customer_prefs` (`id`, `user_id`, `max_suggestion`, `budget`, `calorie`, `dine_in`, `take_out`, `delivery`, `notes`, `created`, `modified`) VALUES (
        // NULL, '29', '25', '30.00', '1800', '1', '1', '1', NULL, NOW(), NOW()
        // );
        $all = "";
        for ($m = $startID; $m <= $endID; $m++) {
            $gen = "INSERT INTO `project`.`customer_prefs` (`id`, `user_id`, `max_suggestion`, `budget`, `calorie`, `dine_in`, `take_out`, `delivery`, `notes`, `created`, `modified`) VALUES (";
            $val = explode(',', "NULL, '29', '25', '30.00', '1800', '1', '1', '1', NULL, NOW(), NOW()");
            $size = count($val);
            $info = array();
            $id = $startID - ($startID - $m);
            for ($n = 0; $n < $size; $n++) {
                $c = $val[$n];
                switch ($n) {
                    case 1:
                        // list of user ids
                        $info[] = "'$id'";
                        break;
                    case 3:
                        $budget = rand(40, 150);
                        $info[] = "'$budget'";
                        break;
                    case 4:
                        $calorie = rand(1200, 3000);
                        $info[] = "'$calorie'";
                        break;
                    case 5:
                        $info[] = "'1'";
                        break;
                    case 6:
                        $info[] = "'1'";
                        break;
                    case 7:
                        $info[] = "'1'";
                        break;
                    case 8:
                        $info[] = "'Notes for customer $id'";
                        break;
                    default:
                        $info[] = "$c";
                        break;
                }
            }
            $info = implode(',', $info);
            $gen .= $info . ");<br/><br/>";
            $all .=$gen;
        }
        return $all;
    }

    // new user entries must be done manually. because of ACL issues.
    function _genUsers($type, $startID, $qty) {
        // type = type of user: admin/customer/owner
        // qty = number wanted
        // hashed pw (w/ current salt) for:
        // customer: 94f095892621bcedab4b84fc59ce56a434538e3c 
        // owner: eab88bf3ae2291f598887abf9cbe18a13f0a36a1
        // group_id: 10 admin, 9 owner, 8 customer
        // INSERT INTO `project`.`users` (`id`, `group_id`, `first_name`, `last_name`, `email`, `phone`, `username`, `password`, `active`, `created`, `modified`) VALUES (
        // NULL, '8', 'Cust05', 'Cust05', 'Cust05@gmail.com', NULL, 'Cust05', '94f095892621bcedab4b84fc59ce56a434538e3c', '1', NOW(), NOW()
        // );
    }

    // generate a set of address, corresponding to the number of ids
    function _genAddrs($ids) {
        // $type is work/home/outside
        // ids is an aray of pref_ids
        $insert = "";
        $types = array("Home", "Work", "Other");
        foreach ($types as $t) {
            $insert .="<br/>--- Data for $t";
            foreach ($ids as $id) {
                $tmp = $this->_genAddr(
                                "INSERT INTO `project`.`addresses`(`id`, `customer_pref_id`, `type`, `address`, `city`, `province`, `country`, `postal`, `created`, `modified`)  VALUES (", "NULL, '9', 'Work', '9 Work Add', 'burnaby', 'BC', 'Canada', NULL, NOW(), NOW()", "$t", $id);
                $insert .= "<br/>" . $tmp;
            }
        }
        return $insert;
    }

    // generate a single address
    function _genAddr($front, $value, $type, $id) {
        $gen = $front;

        $val = explode(',', $value);

        $size = count($val);

        // get a random id that fits the needs of address's field
        //$rid = $this->_randID($ids);
        $rCity = $this->_randCity();

        // start an array to keep each data
        $info = array();
        for ($i = 0; $i < $size; $i++) {
            $c = $val[$i];

            if ($c == 'NULL') {
                $info[] = "NULL";
            } else if ($c == 'NOW()') {
                $info[] = "NOW()";
            } else {

                switch ($i) {
                    case 1:
                        $info[] = "'$id'";
                        break;
                    case 2:
                        $info[] = "'$type'";
                        break;
                    case 3:
                        $tmp = "'$type Address for " . $id . "'";
                        $info[] = $tmp;
                        break;
                    case 4:
                        $info[] = "'$rCity'";
                        break;
                    default:
                        $info[] = "$c";
                        break;
                }
            }
        }

        $info = implode(',', $info);
        $gen .= $info . ");";
        //INSERT INTO `project`.`addresses`       
        //(`id`, `customer_pref_id`, `type`, `address`, `city`, `province`, `country`, `postal`, `created`, `modified`)       
        //VALUES
        //(NULL, '9', 'Work', '9 Work Add', 'burnaby', NULL, NULL, NULL, NOW(), NOW());
        return $gen;
    }

    // returns a random ID base don $ids array
    function _randID($ids) {
        $size = count($ids);
        $rand = rand(1, $size);
        return $ids[$rand - 1];
    }

    // returns a random city
    function _randCity() {
        $n = rand(0, 6);
        $city = array('Vancouver', 'Burnaby', 'Coquitlam', 'North Van', 'Surrey', 'Langley', 'Richmond');

        return "$city[$n]";
    }

    function _randBool() {
        return rand(0, 1);
    }

}

?>
