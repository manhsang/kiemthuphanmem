function xulyXoa($id) {
	$.ajax({
	   type:'delete',
	   url:'/nguoidung/' + $id,
	   success:function(data){
	      console.log(data);
	   }
	});
}