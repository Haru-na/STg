$(function(){
  // 検索ボタンがクリックされる時に実行される
  $('#serch_btn').click(function() {
    //入力された値を取得
    let zipCode = $('#zipcode').val();
    //確認済み
    console.log(zipCode);
    //urlを設定
    let url = "https://zipcloud.ibsnet.co.jp/api/search";
    //送るデータを整形する
    let param = { zipcode : zipCode }
    //サーバーと通信(Ajax)
    $.ajax({
      type: "GET",
      cache: false,
      data: param,
      url: url,
      dataType: "jsonp"
    })
      .done(function(res) {
        if (res.status != 200) {
          //通信には成功。APIの結果がエラー
          $('#zip-result').html(res.messege);
        } else {
          for (let i = 0; i < res.results.length; i++) {
            const result = res.results[i];
            console.log(result);
            let address = result.address1 + result.address2 + result.address3;
            $('#address').val(address);
          }
        }
      })
      .fail(function(error) {
        console.log(error);
        $('#zip-result').html('<p>通信エラーです。時間をおいてお試しください</p>');
      })
  })
});