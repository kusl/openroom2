<?php

/**
 * Created by PhpStorm.
 * User: kus
 * Date: 2/3/17
 * Time: 12:10 PM
 */

/**
 * @Entity @Table(name="Resource")
 **/
class Resource
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
    /**
     * @var
     */
    protected $group;
    /**
     * @Column(type="integer")
     * @var int
     */
    protected $position;
    /**
     * @Column(type="integer")
     * @var int
     */
    protected $capacity;
    protected $resourceGroup;

}