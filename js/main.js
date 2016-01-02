// 数据提交	
function submit(){
	if(!check()){
		return;
	}
	$.post('server.php?act=add',{
		username:username.value,
		password:password.value,
		email:email.value,
	},function(json){
		addOne({
		username:username.value,
		password:password.value,
		email:email.value,
		});
	},'json')
}
// 数据验证
function check(){
	var _username = username.value,_password = password.value,_email = email.value;
	if(_username==''){
		usernameTip.innerHTML='用户名输入不能为空';
		username.focus();
		return false;
	}else if(_password==''){
		usernameTip.innerHTML='';
		passwordTip.innerHTML='密码不能为空';
		password.focus();
		return false;
	}else if(_email==''){
		usernameTip.innerHTML='';
		passwordTip.innerHTML='';
		emailTip.innerHTML='邮箱不能为空';
		email.focus();
		return false;
	}
	return true;
}

// 获取全量数据
function all(){
	$.get('server.php?act=getAll',function(json){
		render(json.data);
	},'json');
}
all();

// 渲染全部数据
function render(aData){
	var sHtml = '';
	for(var i=0,len=aData.length;i<len;i++){
		sHtml+='<li>'+aData[i].username+'-'+aData[i].password+'-'+aData[i].email+'</li>';
	}
	J_all.innerHTML = sHtml;
}
// 添加一条信息
function addOne(oData){
	J_all.innerHTML+='<li>'+oData.username+'-'+oData.password+'-'+oData.email+'</li>';
}

