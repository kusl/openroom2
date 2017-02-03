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
     * @Column(name="last_login", type="datetime")
     */
    protected $last_login;
    /**
     * @Column(name="is_active", type="boolean")
     */
    protected $is_active;
    /**
     * @Column(name="is_administrator", type="boolean")
     */
    protected $is_administrator;
    /**
     * @Column(name="is_reporter", type="boolean")
     */
    protected $is_reporter;
    /**
     * @Column(name="is_banned", type="boolean")
     */
    protected $is_banned;

}