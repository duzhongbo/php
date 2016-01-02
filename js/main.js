// 数据提交	
function submit(){
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

