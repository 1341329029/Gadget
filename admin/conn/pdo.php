    <?php     
        define('DB_HOST', 'localhost');  
        define('DB_USER', 'root');  
        define('DB_PWD', '123456');  
        define('DB_NAME', 'admin');  
        class DBPDO {  
            public $dsn;         
            public $dbuser;         
            public $dbpwd;         
            public $sth;         
            public $dbh;   
            //初始化  
            function __construct() {  
                $this->dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;  
                $this->dbuser = DB_USER;  
                $this->dbpwd = DB_PWD;  
                $this->connect();  
                $this->dbh->query("SET NAMES 'UTF8'");  
                $this->dbh->query("SET TIME_ZONE = '+8:00'");  
            }  
            //连接数据库  
            public function connect() {  
                try {  
                    $this->dbh = new PDO($this->dsn, $this->dbuser, $this->dbpwd);  
                }  
                catch(PDOException $e) {  
                    exit('连接失败:'.$e->getMessage());  
                }  
            }  
            //插入数据  
            public function insert($sql) {  
            if($this->dbh->exec($sql)) {   
                return $this->dbh->lastInsertId();  
            }  
                return false;  
            }  
            //删除数据  
            public function delete($sql) {  
                if(($rows = $this->dbh->exec($sql)) > 0) {  
                     
                    return $rows;  
                }  
                else {  
                    return false;  
                }  
            }  
            //更改数据  
            public function update($sql) {  
                if(($rows = $this->dbh->exec($sql)) > 0) {  
                      
                    return $rows;  
                }  
                return false;  
            }  
            //获取数据  
            public function select($sql) {  
                $this->sth = $this->dbh->query($sql);  
                @$this->sth->setFetchMode(PDO::FETCH_ASSOC);  
                $result = $this->sth->fetchAll();  
                $this->sth = null;  
                return $result;  
            }  
            //关闭连接  
            public function __destruct() {  
                $this->dbh = null;  
            }  
        }  
        //eg: an example for operate select  
      
        // $test = new DBPDO;  
      
        // $sql = "SELECT * FROM `user` WHERE `id`=1 ";  
      
        // $rs = $test->select($sql);  
      
        // print_r($rs);       
    ?>  