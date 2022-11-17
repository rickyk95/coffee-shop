 <?php 

class DB {
    private $host,$db,$dsn;
    public $pdo;
    function __construct(){
        $this->host = "localhost";
        $this->db = "coffee-posts";
        $this->dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db;
        $this->pdo= new PDO($this->dsn,"root","");
        return $this->pdo;
    }
};

$db = new DB();
$pdo = $db->pdo;
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);


// $host = "localhost";
// $db = "coffee-posts";
// $dsn = "mysql:host=$host" . ";dbname=$db";
// $pdo = new PDO($dsn,"root","");
// $stmt = $pdo->prepare("INSERT INTO products (product_name, price, description) VALUES( 'Filter', 19, 'High quality environmentally friendly filter')");
// $stmt->execute();



// $pdo->prepare("INSERT INTO users (username,password) VALUES ('$username','$hashedPassword')")->execute();



?>