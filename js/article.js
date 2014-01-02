$(document).ready(function () {
	//$("#article_writer #article_footer #publisher_id #publisher1").className = "publishers1";
});

function publisherbtn_onclick(para){
	switch(para){
		case 1:
			break;
		case 2:
			break;
		case 3:
			break;
		default:
	}
}

function publishcomplete(){
	var string1 = document.getElementById("topic_inputer").value;
	var string2 = document.getElementById("article_inputer").value;
	if(string1 == "" || string2 == ""){
		alert("发布失败——标题和正文均不能为空！");
	}else{
		alert("发布成功！");
		window.location.href="myspace.php";
	}
}
