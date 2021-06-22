$(function(){ //HTMLちゃんと読み込んでから実行するよ

    $('.programming > .contents').hide(); //隠す　jsで表示するものはjsで隠す！
    $('.english > .contents').hide(); 

    $('.programming > h2').on('mouseover',function(){　　　　
        $('.programming > .contents').slideDown();
    });

    $(window).on('scroll',function(){
        //englishの文字最上びからの距離を取得
        let english = $('.english > h2').offset().top;
        //画面の高さ
        let wh = $(window).height();
        //$(window).scrollTop()は現在のスクロース位置
        if (english<= $(window).scrollTop() + wh) {
            $('.english > .contents').fadeIn(5000); //フェードインする 
        } 
    
    });

    $('button').on('click',function() {
        //シューとトップにもどる
        $('body,html').animate({scrollTop: 0},500);
        //             animateというメソットを使ってスクロールトップを０.５秒でする
    });


});