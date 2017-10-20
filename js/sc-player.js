console.clear();
function bindEvent(target,$parent){

    var player = SC.Widget(target);
    var progress = $parent.find('.progress');
    var play = $parent.find('.play');
    var backward = $parent.find('.backward');
    var forward = $parent.find('.forward');
    
    var pOffset = progress.offset(); //Zero the progress bar
    var pWidth = progress.width();
    var scrub;
    
    
    
    var setInfo = function () {
        player.getCurrentSound(function (song) {
            var imagecheck = song.artwork_url;
            console.log(song);
            if (!song) {
                $('.float_artwork').css('background-image', '');
                $('.flost_artist').html('');
                $('.float_title').html('해당 트랙이 재생할 수 없는 상태 입니다.');
                return;
            };
            if (imagecheck == undefined){
                $('.float_artwork').css('background-image', "url('" + song.user.avatar_url.replace('-large', '-large') + "')");
            }else{
                $('.float_artwork').css('background-image', "url('" + song.artwork_url.replace('-large', '-large') + "')");
            }
            $('.flost_artist').html(song.user.username);
            $('.float_title').html(song.title);
            player.current = song;
        });

        player.getDuration(function (value) {
            player.duration = value;
        });


        player.isPaused(function (bool) {
            player.getPaused = bool;
        });
    };
    
    
    player.bind(SC.Widget.Events.READY, function (eventData) {
        console.log(eventData);
        setInfo();
        
        //player.toggle();
    }); //Set info on load
    player.bind(SC.Widget.Events.PLAY_PROGRESS, function (e) {
        if (e.relativePosition < 0.003) {
            setInfo();
        }
        //Event listener when track is playing
        $('.progress_bar').css('width', (e.relativePosition * 100) + "%");

    });
    player.bind(SC.Widget.Events.PLAY, function(){
        setInfo();
        if (!$(".play").hasClass('pause')) {
            $(".play")
                .removeClass('now')
                .addClass('pause');
        }
    })

    player.bind(SC.Widget.Events.PAUSE, function (e) { //Event listener when track is paused
        setInfo();
        $(".play")
            .addClass('now')
            .removeClass('pause');
    });

    progress.mousemove(function (e) { //Get position of mouse for scrubbing
        scrub = (e.pageX - pOffset.left);
    });

    progress.click(function () { //Use the position to seek when clicked
        $('.progress_bar').css('width', scrub + "px");
        var seek = player.duration * (scrub / pWidth);
        player.seekTo(seek);
    });

    //Buttons
    play.on('click',function () {
        player.toggle();
    });
    if(backward != null){
        backward.on('click',function () {
            player.prev();
        });
    }
    if(forward != null){
        forward.on('click',function () {
            player.next();
        });
    }
    
}