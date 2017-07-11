<html>
<head>
<meta charset="UTF-8">
<script>
    function createXHR(){
            var XHRequest;
            //创建XMLHttpRequest  考虑浏览器兼容性
            if(window.XMLHttpRequest){ //目前的高版本浏览器
                XHRequest= new XMLHttpRequest();
            }else if(window.ActiveXObject){
                try{
                    XHRequest= new ActiveXObject("Msxml2.XMLHTTP");//ie7及以上，firefox低版本
                }catch(e){
                    XHRequest= new ActiveXObject("Microsoft.XMLHTTP");//ie5\6
                }
            }
            return XHRequest;
        }

function query(){
//获取下拉列表值
var vtypeid=document.getElementById("sid").value;

var XHR=createXHR();
  var v_url="search2.php?typeid="+vtypeid;
         XHR.open('get',v_url,true);
                     XHR.onreadystatechange=function(){
                         if(XHR.status==200 && XHR.readyState==4){
                             var str=XHR.responseText;
                             alert(str);
                           var json_v=eval(str);
//                           var s="<tr><td>产品ID</td><td>产品名称</td><td>价格</td><td>图片</td>";
//                         for(var i=0;i<json_v.length;i++){
//                         s=s+"<tr><td>"+json_v[i].pid+" "+"</td>"+
//                         "<td>"+json_v[i].pname+" "+"</td>"+
//                          "<td>"+json_v[i].price+" "+"</td>"+
//                           "<td>"+"<img src='"+json_v[i].pimage+"'>"+"</td>"+"</tr>";
var s="<tr><td>产品ID</td><td>产品名称</td><td>价格</td><td>图片</td></tr>";
for(var i=0;i<json_v.length;i++){
s=s+"<tr><td>"+json_v[i].pid+""+"</td>"+
"<td>"+json_v[i].pname+""+"</td>"+
 "<td>"+json_v[i].price+""+"</td>"+
  "<td>"+"<img src='"+json_v[i].pimage+"'>"+"</td>"+"</tr>";


                         }
                         document.getElementById("show").innerHTML=s;

                 }
                }
                XHR.send();
                }

</script>
</head>
<body>
产品类型：
<select id="sid">
<option value="0">全部类型</option>
<?php include'conndb.php'?>
<?php
//header("Content-type:text/html;charset=utf-8");
//$db_link= mysql_connect("localhost","root","admin")or die("数据库服务器连接失败!".mysql_error());
//$db=mysql_select_db("666",$db_link);
    $sql="select * from t_type ";
    mysql_query("SET NAMES UTF8");
    $result=mysql_query($sql,$db_link);
   while($v1=mysql_fetch_array($result)){
       ?>
<option value=<?php echo $v1["tid"]?>><?php echo $v1["tname"]?></option>
<?php
}
?>
</select>

<button  onclick="query()">查询</button>
<table id="show">
</table>

</body>

</html>

