
$(document).ready(function(){
    $(".tablerow").each(function(){
		$(this).find('.editicon').click(function(){
			
			$('.tablerow').removeClass('updatebg');
			$(this).parent().parent().addClass('updatebg');
			$('.updaterow').show();
			$('.filter').hide();
			$('.updatemobile').val($(this).parent().parent().find('.mobileno').text());
			$('.updatemail').val($(this).parent().parent().find('.email').text());
			$('.updatestatus').val($(this).parent().parent().find('.status').text());
		});
	});
});

function cancel_update(){
	$('.updaterow').hide();
	$('.filter').show();
	$('.tablerow').removeClass('updatebg');
}
function update_data(){
	var updateinmobile=$('.updatemobile').val();
	var updateinmail=$('.updatemail').val();
	var updateinstatus=$('.updatestatus').val();
	
		if(updateinmobile!='' && updateinmail!='' && updateinstatus!=''){
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("responce").innerHTML = this.responseText;
					location.reload();
				}
			};
			xmlhttp.open("GET","updateuser.php?mobile="+updateinmobile+'&status='+updateinstatus,true);
			xmlhttp.send();
		}else{
			alert('please fill out all fields!!!.');
		}
	
}

function tablesearch(valueget){
	var value = valueget.toLowerCase();
	
    $("#myTable tr").filter(function() {
		//$(this).addClass('highlight');
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
	  
    });
}