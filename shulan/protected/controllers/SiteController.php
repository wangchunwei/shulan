<?php
class SiteController extends CController 
{
    
    public function actionMeau()
    {
        $data = "sshulan";
        $this->render("meau", array("data" => $data));
        
    }
    
    public function actionIndex2()
    {
        $tdk = array(
        	"title" => "束兰皮草官网主页_束兰皮草-长春束兰皮草官网",
            "description" => "束兰皮草，中国皮草驰名商标，长春束兰皮草分公司",
            "keywords" => "束兰皮草官网，长春束兰皮草，束兰国际,中国著名品牌,中国裘皮衣王,中国真皮标志品牌产品,中国皮革协会毛皮专业委员会副会长单位,裘皮,皮草,皮衣,貂皮大衣,尼克服,羊绒大衣,狐狸皮,毛领,时装,衣服,服饰,时尚服装",
            );
        
        $mysql = new SaeMysql();
        $sql   = "SELECT * FROM `post` WHERE `valid` = 1 order by `mtime` desc"; 
        $res   = $mysql->getData($sql);
     	$this->render("index",array("tdk" => $tdk, "data" => $res));   
    }
    
    public function actionIndex() {
        
        $tdk = array(
        	"title" => "束兰皮草官网主页_束兰皮草-长春束兰皮草官网",
            "description" => "束兰皮草，中国皮草驰名商标，长春束兰皮草分公司",
            "keywords" => "束兰皮草官网，长春束兰皮草，束兰国际,中国著名品牌,中国裘皮衣王,中国真皮标志品牌产品,中国皮革协会毛皮专业委员会副会长单位,裘皮,皮草,皮衣,貂皮大衣,尼克服,羊绒大衣,狐狸皮,毛领,时装,衣服,服饰,时尚服装",
            );
        
        $mysql = new SaeMysql();
        $sql   = "SELECT * FROM `post` WHERE `valid` = 1 order by `mtime` desc"; 
        $res   = $mysql->getData($sql);
     	$this->render("index2",array("tdk" => $tdk, "data" => $res)); 
        
        
        
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
    
    public function actionWork()
    {
     	$this->render("work");   
    }
    
    public function actionAbout()
    {
        $tdk = array(
        	"title" => "束兰皮草官网主页_束兰皮草-长春束兰皮草官网",
            "description" => "束兰皮草，中国皮草驰名商标，长春束兰皮草分公司",
            "keywords" => "束兰皮草官网，长春束兰皮草，束兰国际,中国著名品牌,中国裘皮衣王,中国真皮标志品牌产品,中国皮革协会毛皮专业委员会副会长单位,裘皮,皮草,皮衣,貂皮大衣,尼克服,羊绒大衣,狐狸皮,毛领,时装,衣服,服饰,时尚服装",
            );
     	$this->render("about", array("tdk" =>$tdk)); 
        
    }
    public function actionSetSuggest()
    {

        $mail    = isset($_POST['mail'])    ? $_POST['mail']    : null;
        $phone   = isset($_POST['phone'])   ? $_POST['phone']   : null;
        $content = isset($_POST['content']) ? $_POST['content'] : null;
        $name    = isset($_POST['city'])    ? $_POST['city']    : null;
        $city    = isset($_POST['name'])    ? $_POST['name']    : null;
        if(empty($mail) || strpos($mail, '@') == false){
            echo json_encode(array('msg' => '邮箱不能为空', 'code' => 0));
            return;
        }
        
        if(empty($content)){
            echo json_encode(array('msg' => '留言不能为空', 'code' => 0));
            return;
        }
        
        $mysql = new SaeMysql();
        
        $sql = "INSERT  INTO `suggest` ( `name`,`email`, `city`,`mobile`, `content`, `ctime`) VALUES (  '" .$name."' , '" .$mail."' ,'" .$city."' , '". $phone."', '". $content. "', NOW() ) ";
        
		$mysql->runSql($sql);
        
        echo json_encode(array('msg' => '提交成功！！感谢您的宝贵意见', 'code' => 1));
        
    }
        
        
        
                                      
                                      
}
