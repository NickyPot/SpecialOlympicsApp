<?php
/**
 * Database.php
 * Database access using PDO
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */

/**
 * Class Database init database connection
 */
class Database extends PDO
{
    private $_driver = 'mysql';
    private $_host = 'lochnagar.abertay.ac.uk';
    private $_user = 'sqlcmp311gc1904';
    private $_password = 'euJp9u2XMmSc';
    private $_database = 'sqlcmp311gc1904';
    private $_char = 'utf8';
    private $_dsn = null;
    public function __construct()
    {
        $this->_dsn = $this->_driver.':host='.$this->_host.';dbname='.$this->_database.';charset='.$this->_char;
        $default_options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        $options = array_replace($default_options, []);
        parent::__construct($this->_dsn, $this->_user, $this->_password, $options);
    }
    public function run($sql, $args = NULL)
    {

        if (!$args)
        {
            $r = $this->query($sql)->fetchAll();
            return $r;
        }
        $stmt = $this->prepare($sql);
        $stmt->execute($args);

        return $stmt->fetchAll();
    }
}