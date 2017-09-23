<?PHP
session_start();
if(!$_SESSION['username'] || !$_SESSION['checkpwa']) {
$LoginScript = "http://www.pwa.co.th/login.php";
$website = "http://".$_SERVER["HTTP_HOST"];
$redirecturl = $website;
$redirecturl .= $_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
$redirecturl = base64_encode($redirecturl);
header("Location: $LoginScript?mylink=$redirecturl");
exit;
};

//check authenication
//$userid = array("0010473","0010353","0009195","0010491","0011733");
//$flaguser=in_array($_SESSION["username"],$userid);

if($_SESSION["MyArea"]==8)
{
	//echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://reg8.pwa.co.th/_webapp/myquiz/index.php\" />";	
}
//elseif($flaguser=="1")
//{
	
//}
else
{

	unset($_SESSION);
	echo("<script>alert('สิทธิ์ของคุณไม่สามารถเข้าระบบได้ กรุณาติดต่อผู้ดูแลระบบ โทร 045311432 ต่อ 139')</script>");
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://reg8.pwa.co.th/\" />";

}

?>