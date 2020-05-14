<?
namespace app;
use libs\Database;
session_start();

 spl_autoload_register(function($clases){

 	  $file = str_replace('\\', '/', $clases).'.php';
 	if (file_exists($file) ) {
 		 include  $file;
 	}
 	  
 });


// include 'libs/Database.php';
$data =   Database::getInstance();

 
// $result = $data->select()->from('Person')->execute()->fetchAll();

echo "<pre>";
print_r($result);

// $data->select()->from('person')->orderBy('id','desc')->execute();//->FetchAll(); 



 
//select * from article
// $data->select->from("article")->where(['id',2,'='])->FetchAll();//select * from article where id = 2
// $data->select->from('category', "article")->leftjoin("category.id","article.id","=")

// $article;
// $data['title'] = "test";
// $data->insert->table('article')->filds();




// try {
//    		 $dbh = new PDO('mysql:host=db;dbname=myDb;charset=utf8', 'user', 'test');
// 		} catch (PDOException $e) {
// 		    die('Подключение не удалось: ' . $e->getMessage());
// 		}
// $statm = $dbh->prepare("SELECT * FROM Person WHERE id = :id");

// $statm->bindValue(":id",2,\PDO::PARAM_INT);
// $statm->execute();
// $result = $statm->fetchAll();
// print_r($result);
