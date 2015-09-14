<?php
class CmsController extends CController {

    
    public function init() {
        
                     
        
    }
    
    
    protected function _isLogin() {
        
        session_start();      
        if(!isset($_SESSION["name"]) || empty($_SESSION["name"])) {
            $url = "/shulan/cms/index/";
        	header("Location: {$url}"); 
            Yii::app()->end();
        }
        
    }
    
    
    public function actionIndex() {
       
        //如果登录状态，直接跳转到列表页
        session_start();
        if(isset($_SESSION["name"]) && !empty($_SESSION["name"])) {
            $url = "/shulan/cms/list/";
        	header("Location: {$url}"); 
            Yii::app()->end();
        }
    	$this->render("index");    
              
        
    }
    
    public function actionList() {
          
        $this->_isLogin();
        
        $mysql = new SaeMysql();
        $sql   = "SELECT * FROM `post` order by `post_id` asc"; 
        $res   = $mysql->getData($sql);
        $this->render("list", array("list" => $res));             
        
    }
    
    public function actionSuggest() {
          
        $this->_isLogin();
        
        $mysql = new SaeMysql();
        $sql   = "SELECT * FROM `suggest` order by `ctime` desc"; 
        $res   = $mysql->getData($sql);
        $this->render("suggest", array("list" => $res));             
        
    }
    
    public function actionSetValid() {
              
		$this->_isLogin();             
        $post = ($_GET);   
        unset($post['r']);
        $id = key($post);
        $sql = "update `post` set `valid` = 1 where `post_id` = {$id}";
        $mysql = new SaeMysql();
        $mysql->runSql($sql);
        
        $url = "/shulan/cms/list/";
        header("Location: {$url}"); 
        Yii::app()->end();  
    }
    
    
    public function actionUnsetValid() {
        
		$this->_isLogin();             
        $post = ($_GET);   
        unset($post['r']);
        $id = key($post);
        $sql = "update `post` set `valid` = 0 where `post_id` = {$id}";
        $mysql = new SaeMysql();
        $mysql->runSql($sql);
        
        $url = "/shulan/cms/list/";
        header("Location: {$url}"); 
        Yii::app()->end();
                     
    }
    
    
    /*
    public function actionPost() {

        $this->_isLogin(); 
        $title    = $_POST['title'];
        $abstract = $_POST['abstract'];
        $pic      = $_POST['pic'];
        $url      = $_POST['url'];
        if(empty($title) ||empty($abstract) ||empty($pic) ||empty($url)) {
        	echo json_encode(array("msg" => "请输入完整的内容"));
            return;
            
        }
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `post`(`title`, `abstract`, `pict_url`, `url`, `ctime`) VALUES ('{$title}', '{$abstract}', '{$pic}', '{$url}', '{$time}')";
        $mysql = new SaeMysql();
        $res = $mysql->runSql($sql);
        var_dump($res);
        die();
        echo json_encode(array("msg" => "success"));
        
    }
    */
    
    public function actionAdd() {
     	
        $this->_isLogin(); 
        $post = ($_GET);   
        unset($post['r']);
        $res = array();
        if(empty($post)) {
            $this->render("add", array("res" => $res));
            return;        
        }
        
        $id = key($post);
        $sql = "select * from `post` where `post_id` = {$id}";
        $mysql = new SaeMysql();
        $res = $mysql->getData($sql);
        $this->render("add", array("data" => $res[0]));

        
    }
    
    
    public function actionFPost() {
        
        $this->_isLogin(); 
        
        
        if(!empty($_FILES["pic"]["tmp_name"])){
        	$path = time().".jpg";
        
        	$s = new SaeStorage();
			$result=$s->upload("shulan",$path, $_FILES["pic"]["tmp_name"]);

			$picUrl=$s->getUrl("shulan",$path);
        }else{
         	$picUrl = "";   
        }


        $title    = $_POST['title'];
        $abstract = $_POST['abstract'];
        $url      = $_POST['url'];
        if(empty($title) ||empty($abstract) ||empty($url)) {
        	echo "输入的内容不完整";
            return;
        }
    
        $time = date("Y-m-d H:i:s");
        //有数字的时候进行更新
        $post = ($_GET);   
        unset($post['r']);
        if(empty($post)) {            
        	$sql = "INSERT INTO `post`(`title`, `abstract`, `pic_url`, `url`, `ctime`) VALUES ('{$title}', '{$abstract}', '{$picUrl}', '{$url}', '{$time}')";      
        }else{
         	$id = key($post);
            if(!empty($_FILES["pic"]["tmp_name"])) {
            	$sql = "UPDATE `post` set `title`='{$title}', `abstract`='{$abstract}', `pic_url`='{$picUrl}', `url`='{$url}' WHERE `post_id`='{$id}'";
            }else{
                $sql = "UPDATE `post` set `title`='{$title}', `abstract`='{$abstract}', `url`='{$url}' WHERE `post_id`='{$id}'";              
            }
        }
        
        $mysql = new SaeMysql();
        $res = $mysql->runSql($sql);
        //跳转到列表页
        $url = "/shulan/cms/list/";
        header("Location: {$url}"); 
        Yii::app()->end();  
        
    }
    
    
    //判断是否登录成功
    public function actionLogin() {
        
        $mobile   = $_POST["name"];
        $password = $_POST["passwd"];
        
        if(empty($mobile) || empty($password)) {
        	echo json_encode(array("msg" => "用户名或者密码为空"));              
        	return;    
        }
        
        
        $mysql = new SaeMysql();
        $sql   = "SELECT * FROM `user` WHERE `mobile` like '{$mobile}' AND `password` like '{$password}' LIMIT 1";      
        $res   = $mysql->getData($sql);
        if(empty($res)) {
            echo json_encode(array("msg" => "用户名或者密码错误"));             
        	return;           
        }
        
        $name = $res[0]["name"];
        
        //$ucid = uniqid();
        //setcookie("user", $ucid, time()+60*60, "/");
        
        session_start();      
        $_SESSION["name"] = $name;
        echo json_encode(array("msg" => "success")); 
        
        
        
    }
    
    
    
    
    
    
}