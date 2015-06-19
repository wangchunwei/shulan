<?php
class SiteController extends CController 
{
    
    public function actionIndex()
    {
        $data = "sshulan";
        $this->render("index", array("data" => $data));
        
    }
    
    public function actionList()
        
    {
        $get = $_GET['id'];
        $data = "list";
        $this->render("list", array("data" => $data));
        
    }
    
    public function actionLaw()
    {
    	$this->render("law");    
        
    }
    
    public function actionAddress()
    {
        
         $this->render("address");
    }
    
    
    public function actionContact()
    {
        
        $this->render("contact");
    }
    
    public function actionHistory()
    {
        
     	$this->render("history");   
    }
    
    public function actionSafe()
    {
        $this->render("safe");
    }
    
    public function actionShow()
    {
        $this->render("show");
    }
    
    
    public function actionStatus()
    {
     	$this->render("status");
    }
    
    public function actionSuggest()
    {
    	$this->render("suggest");    
    }
    
    public function actionCulture()
    {
     	$this->render("culture");
    }
    
    public function actionGallery()
    {
     	$this->render("gallery");   
        
    }
    
    public function actionSetSuggest()
    {

        $mail    = isset($_POST['mail'])    ? $_POST['mail']    : null;
        $phone   = isset($_POST['phone'])   ? $_POST['phone']   : null;
        $content = isset($_POST['content']) ? $_POST['content'] : null;
        $name    = isset($_POST['city'])    ? $_POST['city']    : null;
        $city    = isset($_POST['name'])    ? $_POST['name']    : null;
        if(empty($mail) || strpos($mail, '@') == false){
            echo json_encode(array('msg' => '邮箱不能为空'));
            return;
        }
        
        if(empty($content)){
            echo json_encode(array('msg' => '留言不能为空'));
            return;
        }
        
        $mysql = new SaeMysql();
        
        $sql = "INSERT  INTO `suggest` ( `name`,`email`, `city`,`mobile`, `content`, `ctime`) VALUES (  '" .$name."' , '" .$mail."' ,'" .$city."' , '". $phone."', '". $content. "', NOW() ) ";
        
		$mysql->runSql($sql);
        
        echo json_encode(array('msg' => '提交成功！！感谢您的宝贵意见'));
        
    }
        
        
        
                                      
                                      
}
