$(document).on('ready',function(){

    $(".chat-button").on('click',function(e){
        e.preventDefault();
        $(".chat-content").slideToggle("fast");
    });


});