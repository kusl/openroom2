<?php

/**
 * Created by PhpStorm.
 * User: kus
 * Date: 2/4/17
 * Time: 10:58 AM
 */

/**
 * @Entity @Table(name="Configuration")
 **/
class Configuration
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;
    /**
     * @Column(type="string", unique=TRUE)
     * @var string
     */
    protected $name;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $value;
}