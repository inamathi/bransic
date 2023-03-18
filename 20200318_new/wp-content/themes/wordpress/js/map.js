function initMap() {

        var map = new google.maps.Map(document.getElementById('access-area'), {

          center: {lat: 35.696200, lng: 139.683575},

          zoom: 16,

          styles: [

// stylesの直後にペースト

  ]

   });

var iconBase = '';
var icons = [
  {
    name: 'A・B Studio',
    position: new google.maps.LatLng(35.696849, 139.684820),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/bransic-pin.png', scaledSize : new google.maps.Size(55, 83) },
    opened: 1
  },
  {
    name: 'C Studio',
    position: new google.maps.LatLng(35.692876, 139.681803),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/signsound-pin.png', scaledSize : new google.maps.Size(55, 83) },
    opened: 1
  },
  {
    name: 'p1',
    position: new google.maps.LatLng(35.697199, 139.686338),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins1.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p2',
    position: new google.maps.LatLng(35.695961, 139.684589),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins2.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p3',
    position: new google.maps.LatLng(35.695996, 139.683210),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins3.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p4',
    position: new google.maps.LatLng(35.697681, 139.685913),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins4.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p5',
    position: new google.maps.LatLng(35.698020, 139.684236),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins5.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p6',
    position: new google.maps.LatLng(35.697636, 139.684172),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins6.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p7',
    position: new google.maps.LatLng(35.695660, 139.685586),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins7.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p8',
    position: new google.maps.LatLng(35.692770, 139.681785),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins8.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p9',
    position: new google.maps.LatLng(35.692396, 139.682222),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins9.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p10',
    position: new google.maps.LatLng(35.691900, 139.683215),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins10.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p11',
    position: new google.maps.LatLng(35.692339, 139.680915),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins11.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p12',
    position: new google.maps.LatLng(35.693392, 139.683175),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins12.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p13',
    position: new google.maps.LatLng(35.695032, 139.682225),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins13.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  },
  {
    name: 'p14',
    position: new google.maps.LatLng(35.693513, 139.683711),
    img: { url: iconBase + 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/pins/white/pins14.png', scaledSize : new google.maps.Size(26, 26) },
    opened: 0
  }
];
var secretMessages = [
'・bransic本社<br>・グループ会社Studio_Ast/Bst', 
'・グループ会社Studio_Cst', 
'<p>1. <strong>Ｙ・Ｓパーキング</strong><br>住所　　　東京都中野区中央1丁目21<br>料金　　　00:00～24:00 最初の60分 300円、以降 30分 150円<br><span style="color:#ff0000;">最大料金　入庫後24時間以内　2,000円</span><br>収容台数　20台</p>', 
'<p>2. <strong>タイムパーク中野坂上</strong><br>住所　　　東京都中野区本町1丁目15<br>料金　　　08:00～22:00 30分 200円　　22:00～08:00 60分 100円<br><span style="color:#ff0000;">最大料金　平日昼間 08:00～22:00　2,400円（日曜日のみ1400円）</span><br><span style="color:#ff0000;">　　　　　最大料金　平日深夜 00:00～08:00　 500円</span><br>収容台数　19台</p>',
'<p>3. <strong></strong><strong>ハーモニースクエア駐車場</strong><br>住所　　　東京都中野区本町1丁目32-2<br>料金　　　08:00～23:00 最初の1時間 400円　1時間以降30分毎 200円<br><span style="color:#ff0000;">※ 23時以降は出庫できませんのでご注意下さい。</span><br>収容台数　25台</p>',
'<p>4. <strong>リパーク中野中央１丁目第3</strong><br>住所　　　東京都中野区中央1丁目21-13<br>料金　　　08:00～22:00 12分 200円　　22:00～08:00 60分 100円<br><span style="color:#ff0000;">最大料金　入庫後24時間以内　2,800円</span><br>収容台数　3台</p>',
'<p>5. <strong></strong><strong>ユアー・パーキング中野中央第4駐車場</strong><br>住所　　　東京都中野区中央1丁目32-7<br>料金　　　08:00～20:00 20分 300円　　20:00～08:00 60分 100円<br><span style="color:#ff0000;">最大料金　夜間 20:00～08:00 400円</span><br>収容台数　2台<br> </p>',
'<p>6. <strong>ナビパーク中野中央第2</strong><br>住所　　　東京都中野区中央1丁目33-8<br>料金　　　07:00～22:00 12分 400円　　22:00～07:00 60分 100円<br><span style="color:#ff0000;">最大料金　夜間 22:00～07:00　6</span><span style="color:#ff0000;">00円</span><br>収容台数　9台<br> </p>',
'<p>7. <strong>アイ</strong><strong>パーク中野本町第2</strong><br>住所　　　東京都中野区本町1丁目-14-4<br>料金　　　オールタイム 15分 200円　　20:00～08:00 60分 100円<br><span style="color:#ff0000;">最大料金　18:00～08:00 600円</span><br>収容台数　2台<br> </p>',
'<p>8. <strong>アローパーキング中野本町</strong><br>住所　　　東京都中野区本町2-2-11<br>料金　　　全日 08:00〜24:00 20分 100円　　全日 00:00〜08:00 1時間 100円<br><span style="color:#ff0000;">24時間最大2,100円</span><br>収容台数　5台<br></p>',
'<p>9. <strong>タイムズ中野本町第２</strong><br>住所　　　東京都中野区本町1-4<br>料金　　　08:00-22:00 30分 220円　　22:00-08:00 60分 110円<br><span style="color:#ff0000;">全日　駐車後24時間　最大料金1980円</span><br>収容台数　3台<br></p>',
'<p>10. <strong>タイムズ弥生町第１６</strong><br>住所　　　東京都中野区弥生町1-2<br>料金　　　08:00-20:00 30分 220円　　20:00-08:00 60分 110円<br><span style="color:#ff0000;">全日　駐車後24時間　最大料金1650円</span><br>収容台数　6台<br></p>',
'<p>11. <strong>ＰＢ中野本町２丁目ＰＡＲＫＩＮＧ</strong><br>住所　　　東京都中野区本町2-5<br>料金　　　全日 08:00〜22:00 20分 200円 10時間最大2,200円<br>　　　　　全日 22:00〜08:00 1時間 100円 10時間最大2,200円<br>収容台数　5台<br></p>',
'<p>12. <strong>アップルパーク中野区本町第１</strong><br>住所　　　東京都中野区本町1-8-3<br>料金　　　全日 00:00〜24:00 12分 200円<br><span style="color:#ff0000;">【1〜4番車室】07:00〜20:00 最大料金適用なし<br>【5・6番車室】12時間最大2,200円<br>全車室】20:00〜07:00 最大700円 </span><br>収容台数　6台<br></p>',
'<p>13. <strong>リパーク中野本町２丁目第７</strong><br>住所　　　東京都中野区本町2-29-5<br>料金　　　全日 08:00〜20:00 15分 200円 最大料金1,900円<br>　　　　　全日 20:00〜08:00 1時間 100円 最大料金500円<br>収容台数　2台<br></p>',
'<p>14. <strong>ナビパーク中野本町第７</strong><br>住所　　　東京都中野区本町1-9-4<br>料金　　　全日 08:00〜21:00 15分 200円 24時間最大2,300円<br>　　　　　全日 21:00〜08:00 1時間 100円 24時間最大2,300円、夜間(21:00-8:00)最大700円<br>収容台数　3台<br></p>',
];
icons.forEach(function(icon,index) {
  var marker = new google.maps.Marker({
    position: icon.position,
    icon: icon.img,
    map: map,
    title: icon.name
  });
  attachSecretMessage(marker, secretMessages[index], icon);
});

}
//initMap()の外に追加
function attachSecretMessage(marker, secretMessage, icon) {
  var infowindow = new google.maps.InfoWindow({
    content: secretMessage
  });

  marker.addListener('click', function() {
    infowindow.open(marker.get('map'), marker);
  });
  
  if (icon.opened) {
    google.maps.event.addListenerOnce(marker.get('map'), 'tilesloaded', function() {
      infowindow.open(marker.get('map'), marker);
    });
  }
}