<?php

/**
 * Created by PhpStorm.
 * User: kus
 * Date: 2/3/17
 * Time: 10:37 AM
 */

/**
 * @Entity @Table(name="Users")
 **/
class User
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
    protected $username;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $password;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $email;
    /**
     * @Column(type="datetime")
     */
    protected $lastLogin;
    /**
     * @Column(type="boolean")
     */
    protected $isActive;
    /**
     * @Column(type="boolean")
     */
    protected $isAdministrator;
    /**
     * @Column(type="boolean")
     */
    protected $isReporter;
    /**
     * @Column(type="boolean")
     */
    protected $isBanned;

}