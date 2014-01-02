var stepcompleted1 = false;
var stepcompleted2 = false;
var picuploaded = [];

$(document).ready(function () {
	$("#posts .postscontents").hide();
	$("#postscontent_pic").show();
	$("#controlpanel").hide();
	$("#controlpanel #c_panel2 .picuploads").hide();
	$("#controlpanel #c_panel2 #cpanel2_btn1").hide();
	$("#cpanel2_fileuploader").hide();
	stepcompleted1 = false;
	stepcompleted2 = false;
});

function filterbtn_onclick(para){
	$("#controlpanel").show();
	$("#controlpanel .c_panels").hide();
	switch(para){
		case 1:
			$("#controlpanel #c_panel1").show();
			break;
		case 2:
			init_filepanels();
			$("#controlpanel #c_panel2").show();
			break;
		case 3:
			$("#controlpanel #c_panel3").show();
			break;
		case 4:
			$("#controlpanel #c_panel4").show();
			break;
		case 5:
			$("#controlpanel #c_panel5").show();
			break;
		default:
	}
}

function posterbtn_onclick(para){
	$("#posts .postscontents").hide();
	switch(para){
		case 1:
			$("#postscontent_txt").show();
			break;
		case 2:
			$("#postscontent_pic").show();
			break;
		case 3:
			$("#postscontent_res").show();
			break;
		case 4:
			$("#postscontent_ado").show();
			break;
		default:
	}
}

function checkload(){
	alert("!");
	document.execCommand('SaveAs');
}

function init_filepanels(){
	$("#controlpanel #c_panel2 .picuploads").hide();
	$("#controlpanel #c_panel2 #picupload1").show();
	$("#controlpanel #c_panel2 #cpanel2_btn1").show();
	stepcompleted1 = false;
	stepcompleted2 = false;
}

function trigger_filebox(){
	$("#cpanel2_fileuploader").trigger("click");
}
function begin_upload_image(){ //上传一张图片
	if(picuploaded.length >= 6){
		alert("无法上传更多的图片");
		return;
	}
	//alert("Upload your own image");
	//show.document.execCommand('SaveAs');
	picuploaded.push(picuploaded.length + 1);
	document.getElementById("cpanel2_fileuploader").value = "";
	redraw_images();
}
function cancel_an_image(pos){ //取消一张图片
	if(pos >= picuploaded.length){
		return;
	}
	picuploaded = arraydeleteelement(picuploaded, pos);
	redraw_images();
}
function redraw_images(){ //重画预览图片
	for(var s = 0; s < 6; s++){
		if(s < picuploaded.length){
			document.getElementById("previewimage" + String(s + 1)).src = "images/" + String(picuploaded[s]) + ".jpg";
		}else{
			document.getElementById("previewimage" + String(s + 1)).src = "images/blank.png";
		}
	}
}

function textcomplete(){
	stepcompleted2 = true;
}

function distribute_pics(){
	var string1 = document.getElementById("cpanel2_input2").value;
	if(string1 == "" || picuploaded.length <= 0){
		alert("发布失败——图片栏和文字栏均不能为空！");
	}else{
		$("#controlpanel").hide();
		alert("发布成功！");
		picuploaded = [];
		redraw_images();
		document.getElementById("cpanel2_input2").value = "";
	}
}

function getPath(obj){
	if(obj){
		if(window.navigator.userAgent.indexOf("MSIE") >= 1){
			obj.select();
			return document.selection.createRange().text;
		}else if(window.navigator.userAgent.indexOf("Firefox") >= 1){
			if(obj.files){
				return obj.files.item(0).getAsDataURL();
			}
			return obj.value;
		}
		return obj.value;
	}
}

function arraydeleteelement(parray, pos){ //删除数组中的指定元素
	if(pos < 0){
		return parray;
	}
	if(pos >= parray.length){
		return parray;
	}
	neoarray = [];
	for(var r = 0; r < parray.length; r++){
		if(r != pos){
			neoarray.push(parray[r]);
		}
	}
	return neoarray;
}
