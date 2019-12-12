$(document).ready(function(){
    $("#shop").click(function(){
        var ccc=document.getElementsByClassName('ccc');
        if(ccc==null){
            alert('No tiene ningun producto');
        }
        else{
            var dt=$('.hh').data("producto");
            var dat=dt.innerText;
            alert(dat);/*
            $.ajax({
                url:'/ferreteria/app/reportes/reporte2.php',
                type:'POST',
                data:{
                    canti:dat
                }
            })*/
        }
    });

});





/*
function shopping(){
    /*$.ajax({
        url: '/ferreteria/app/scripts/venta_segura.php',
		type: 'POST',
        data: car.serialize(),
    })*/
