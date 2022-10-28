$('#search').on('keyup',function(){
    $value=$(this).val();
    if($value){
            $('.table1').hide();
            $('.table2').show();
        }
        else{
            $('.table1').show();
            $('.table2').hide();
        }

$.ajax({
    type:'get',
    url:'{{URL::to("search")}}',
    data:{'search':$value},
    success:function(data){
        $('#Content').html(data);

    }
});
})
