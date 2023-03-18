function initMap() {

        var map = new google.maps.Map(document.getElementById('access-map-c'), {

          center: {lat: 35.696849, lng: 139.684820},

          zoom: 18,

          styles: [

// stylesの直後にペースト

  ]

   });

var iconBase = '';
var icons = [
  {
    name: 'signsound',
    position: new google.maps.LatLng(35.696849, 139.684820),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/signsound-pin.png', scaledSize : new google.maps.Size(48, 62) }
  },
  {
    name: 'p1',
    position: new google.maps.LatLng(35.697199, 139.686338),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins1.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p2',
    position: new google.maps.LatLng(35.695961, 139.684589),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins2.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p3',
    position: new google.maps.LatLng(35.695996, 139.683210),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins3.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p4',
    position: new google.maps.LatLng(35.697681, 139.685913),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins4.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p5',
    position: new google.maps.LatLng(35.698020, 139.684236),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins5.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p6',
    position: new google.maps.LatLng(35.697636, 139.684172),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins6.png', scaledSize : new google.maps.Size(36, 36) }
  },
  {
    name: 'p7',
    position: new google.maps.LatLng(35.695660, 139.685586),
    img: { url: iconBase + 'http://test.webport.co.jp/signsound/wp-content/themes/wordpress/images/pins/pins7.png', scaledSize : new google.maps.Size(36, 36) }
  }
];
var secretMessages = [
'レッチフィールド中野坂上8Fです。', 
'<p><strong>P1：</strong><strong>Ｙ・Ｓパーキング</strong><br>住所　　　東京都中野区中央1丁目21<br>料金　　　00:00～24:00 最初の60分 300円、以降 30分 150円<br><span style="color:#ff0000;">最大料金　入庫後24時間以内　2,000円</span><br>収容台数　20台</p>', 
'<p><strong>②タイムパーク中野坂上</strong><br>住所　　　東京都中野区本町1丁目15<br>料金　　　08:00～22:00 30分 200円　　22:00～08:00 60分 100円<br><span style="color:#ff0000;">最大料金　平日昼間 08:00～22:00　2,400円（日曜日のみ1400円）</span><br><span style="color:#ff0000;">　　　　　最大料金　平日深夜 00:00～08:00　 500円</span><br>収容台数　19台</p>',
'<p><strong>③</strong><strong>ハーモニースクエア駐車場</strong><br>住所　　　東京都中野区本町1丁目32-2<br>料金　　　08:00～23:00 最初の1時間 400円　1時間以降30分毎 200円<br><span style="color:#ff0000;">※ 23時以降は出庫できませんのでご注意下さい。</span><br>収容台数　25台</p>',
'<p><strong>④リパーク中野中央１丁目第3</strong><br>住所　　　東京都中野区中央1丁目21-13<br>料金　　　08:00～22:00 12分 200円　　22:00～08:00 60分 100円<br><span style="color:#ff0000;">最大料金　入庫後24時間以内　2,800円</span><br>収容台数　3台</p>',
'<p><strong>⑤</strong><strong>ユアー・パーキング中野中央第4駐車場</strong><br>住所　　　東京都中野区中央1丁目32-7<br>料金　　　08:00～20:00 20分 300円　　20:00～08:00 60分 100円<br><span style="color:#ff0000;">最大料金　夜間 20:00～08:00 400円</span><br>収容台数　2台<br> </p>',
'<p><strong>⑥ナビパーク中野中央第2</strong><br>住所　　　東京都中野区中央1丁目33-8<br>料金　　　07:00～22:00 12分 400円　　22:00～07:00 60分 100円<br><span style="color:#ff0000;">最大料金　夜間 22:00～07:00　6</span><span style="color:#ff0000;">00円</span><br>収容台数　9台<br> </p>',
'<p><strong>⑦アイ</strong><strong>パーク中野本町第2</strong><br>住所　　　東京都中野区本町1丁目-14-4<br>料金　　　オールタイム 15分 200円　　20:00～08:00 60分 100円<br><span style="color:#ff0000;">最大料金　18:00～08:00 600円</span><br>収容台数　2台<br> </p>',
'',
];
icons.forEach(function(icon,index) {
  var marker = new google.maps.Marker({
    position: icon.position,
    icon: icon.img,
    map: map,
    title: icon.name
  });
  attachSecretMessage(marker, secretMessages[index]);
});

}
//initMap()の外に追加
function attachSecretMessage(marker, secretMessage) {
  var infowindow = new google.maps.InfoWindow({
    content: secretMessage
  });

  marker.addListener('click', function() {
    infowindow.open(marker.get('map'), marker);
  });
}