// $(".play_trigger").on('click', function () {
// 	var track_num = $(this).attr('data-tracknum');
//     removePlayer();
//     renderPlayer(track_num);
// });

$(document).on('click',".play_trigger",function () {
	var track_num = $(this).attr('data-tracknum');
    removePlayer();
    renderPlayer(track_num);
    
});

function renderPlayer(track_num){
    var url = '//api.soundcloud.com/tracks/'+track_num;
    var $iframe = $("<iframe>",{
        'class': 'sc_widget',
        'id':'iframe_sc_widget',
        'src' : '//w.soundcloud.com/player/?url=' + url,
    });
    
    var $float_player_wrap = $("<div>",{
        'class':'float_player_wrap'
    });
    
    var $float_player = $("<div>",{
        'class':'float_player'
    }).appendTo($float_player_wrap);
    
    var progress = $("<div>",{
        'class':'progress'
    }).appendTo($float_player);
    
    var progress_bar = $("<div>",{
        'class':'progress_bar'
    }).appendTo(progress);
    
    var float_artwork = $("<div>",{
        'class':'float_artwork',
        'style' : 'background-image:url(choi/img/loading.gif)'
    }).appendTo($float_player);
    
    var float_info = $("<div>",{
        'class':'float_info'
    }).appendTo($float_player);
    
    var float_title = $("<div>",{
        'class':'float_title',
        'html' : 'NOW LOADING...'
    }).appendTo(float_info);
    
    var flost_artist = $("<div>",{
        'class':'flost_artist',
        'html' : '로딩이 완료되면 재생을 눌러주세요.'
    }).appendTo(float_info);
    
    var controls = $("<div>",{
        'class':'controls'
    }).appendTo($float_player);
    
    var $button = $("<button>",{
        'class':'play now'
    }).appendTo(controls);
    
    var float_player_close_btn = $("<div>",{
        'class':'float_player_close_btn'
    }).appendTo($float_player).on('click',closePlayer);
    
    
    $('.floating_player_wrap').append($iframe);
    $('.floating_player_wrap').append($float_player_wrap);
    
    $('#footer').addClass('open');
    $('.float_player_close_btn').on('click',closePlayer)
    
    bindEvent($iframe.attr('id'),$float_player_wrap);
    

}

function closePlayer(){
        console.log('Bind closePlayer');
    
    return function () {
         removePlayer()
	}();
}

function removePlayer(){
    var $player = $('.float_player_wrap');
    var $widget = $('.sc_widget');
    
    if($player != null){
        $player.remove();
        $('#footer').removeClass('open');
    }
    
    if($widget != null){
        $widget.remove()
    }
}