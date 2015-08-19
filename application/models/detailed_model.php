<?php

/**
 * Aberdeen Oil Careers
 *
 * PHP version 5.4+
 *
 * LICENSE: This source file is subject to commercial licensing and should not
 * be considered open source without consulting the copyright holders below.
 *
 * @namespace  \
 * @link       http://www.callum-macdonald.co.uk
 * @copyright  2014 Callum Macdonald
 * @license    Commercial Intellectual Property.
 * @see        https://github.com/...
 */
class Detailed_model extends CI_Model

{
    public function getDetails($adId) {

        return $this->db->query(sprintf('SELECT title, company, description, salary, logo, id from adverts WHERE id = "%s"' , $adId))->result();
    }

}
