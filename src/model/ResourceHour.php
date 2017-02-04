<?php

/**
 * Created by PhpStorm.
 * User: kus
 * Date: 2/3/17
 * Time: 1:41 PM
 */

/**
 * @Entity @Table(name="ResourceHours")
 **/
class ResourceHour
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;
    protected $resource;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $status;
    /**
     * @Column(type="datetime")
     */
    protected $startDate;
    /**
     * @Column(type="datetime")
     */
    protected $endDate;
    /**
     * @Column(type="datetime")
     */
    protected $startTime;
    /**
     * @Column(type="datetime")
     */
    protected $endTime;
}