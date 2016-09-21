<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
<table border="1" class="addRow">
<tr>
  <td>Jumlah</td>
  <td>Harga</td>
  <td>Total</td>
  <td>Option</td>
</tr>
<tr>
  <td><input value="10" type="text" class="jumlah"></td>
  <td><input value="10" type="text" class="harga"></td>
  <td><input value="100" type="text" class="total" readonly></td>
  <td><button type="button" class="remove">Remove</button></td>
</tr>
<tr>
  <td><input value="10" type="text" class="jumlah"></td>
  <td><input value="10" type="text" class="harga"></td>
  <td><input value="100" type="text" class="total" readonly></td>
  <td><button type="button" class="remove">Remove</button></td>
</tr>
<tr>
  <td><input type="text" class="jumlah"></td>
  <td><input type="text" class="harga"></td>
  <td><input type="text" class="total1" readonly></td>
  <td><button type="button" class="add">Add</button></td>
</tr>
</table>
<input value="200" type="text" class="subtotal">

<script>
$(document).on('click','.add',function(){
$('.addRow').append('<tr>'+
  '<td><input type="text" class="jumlah"></td>'+
  '<td><input type="text" class="harga"></td>'+
  '<td><input type="text" class="" readonly></td>'+
  '<td><button type="button" class="remove">Remove</button></td>'+
'</tr>');
});

$(document).on('blur','.harga',function(){
if(!$(this).val()){
	$(this).parent().closest('tr').find('.total1').addClass('total');
}else{
	$(this).parent().closest('tr').find('.total1').removeClass('total');
}
});

$(document).on('keyup','.harga',function(){
var jumlah = $(this).parent().closest('tr').find('.jumlah').val();
var harga = $(this).val();
var total = 0;
total = jumlah*harga;
$(this).parent().closest('tr').find('.total').val(total);
var subtotal = 0;
	$('.total').each(function(){
  	subtotal += parseInt($(this).val());
  })
  $('.subtotal').val(subtotal);
});

$(document).on('click','.remove',function(){
 $(this).parent().parent().remove();
 var subtotal = 0;
 	$('.total').each(function(){
  	subtotal += parseInt($(this).val());
  });
  $('.subtotal').val(subtotal);
});
</script>