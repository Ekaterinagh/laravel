$(function () {
    var fx={
        "initModal":function(){
            if($('modal_window').length==0){
                $('<div>').addClass('overlay').fadeTo('fast',0.7).appendTo('body'); //дома
                return $('<div>').addClass('modal_window').fadeTo('fast',1).appendTo('body');
            }else{
                return $('.modal_window');
            }
        },
    };
    $('.img_gallery').click(function(event) {
        event.preventDefault(); //отменяет действие по умолчанию
        var data = $(this).attr('data_id');
        modal=fx.initModal();
        $('<a>').attr('href', '#').addClass('modal-close-btn').html('&times;')
            .click(function(event){
                event.preventDefault();
                $(modal).fadeOut('fast',function(){
                    $(this).remove();
                });
                $('.overlay').fadeOut('fast',function(){
                    $(this).remove();
                });
            })
            .appendTo(modal);
        $.ajax({'url':'/ajax',
            'data':'id='+data,
            'type':'GET',
            'success':function(ok){
                modal.append(ok);
            },
            'error':function(msg){
                modal.append(msg);
            }
        });
    });
});