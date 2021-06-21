// //トップのバックグラウンドIMG
// $(function () {
//     //対象のclass
//   let $elem = $('.switch');
//   //対象のsrcの末尾の文字列
//   let sp = '_sp.';
//   let pc = '_pc.';
//   //画面を切り替えするwindowサイズ
//   let replaceWidth = 768;

//   function imageSwitch() {
//     //windowサイズを取得する
//     let windowWidth = parseInt($(window).width());

//     //ページ内にあるすべての`.js-image-switch`に適応される
//     $elem.each(function(){
//       let $this = $(this);
//       //windowサイズが767を超えたら_spを_pcに置換する
//       if (windowWidth >= replaceWidth) {
//         $this.attr('src',$this.attr('src').replace(sp,pc));
//         //windowサイズが767以下なら_pcを_spに置換する
//       } else {
//         $this.attr('src',$this.attr('src').replace(pc,sp));
//       }
//     })
//   }
//   imageSwitch();

//   //動的なリサイズは操作後0.2秒経ってから処理を実行する
//   let resizeTimer;
//   $(window).on('resize',function() {
//     clearTimeout(resizeTimer);
//     resizeTimer = setTimeout(function() {
//       imageSwitch();
//     },200);
//   })

// });