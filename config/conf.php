<?php
class Conf {
    static private $debug = True;

    static private $databases = array(
        'hostname' => 'localhost',
        'database' => 'id17625829_ifubn',
        'login' => 'id17625829_admin',
        'password' => 'Buis-Les-Baronnies26170'
    );

    static public function getDebug() {
        return self::$debug;
    }

    static public function getLogin() {
        return self::$databases['login'];
    }

    static public function getHostname() {
        return self::$databases['hostname'];
    }

    static public function getDatabase() {
        return self::$databases['database'];
    }

    static public function getPassword() {
        return self::$databases['password'];
    }
}
?>