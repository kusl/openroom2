<?php

/**
 * Created by PhpStorm.
 * User: kus
 * Date: 2/3/17
 * Time: 11:08 AM
 */

/**
 * @Entity @Table(name="Users")
 **/
class ResourceGroup
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $description;
}