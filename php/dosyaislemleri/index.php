<?php

//  php üzerinden dosyaları okuyabilir ve dosyalara yazabiliriz

//  biz bu yeteneği başlangıçta dinamik sayfalarımızı besleyecek verileri saklamak, okumak ve gerektiğinde arayüzden güncelleyebilmek için kullanacağız

//  temel iki fonksiyonla okuma ve yazma işlemlerimizi yapabiliriz

//  file_get_contents($dosya_yolu) -> bu fonksiyon ile yolu belirtilen dosyanın içeriğini okuyarak bir string olarak alabiliriz
$dosyayolu = "yenidosya.txt";
$dosyaicerigi = file_get_contents($dosyayolu);
//echo "<pre>";
//var_dump($dosyaicerigi);
echo "<hr>Dosyayı ilk kez çekiyoruz <br>";
echo $dosyaicerigi;

echo "<hr>Dosyaya yeni veri ekleyip çekiyoruz <br>";

//  file_put_contents($dosya_yolu, $icerik) -> bu fonksiyon ile yolu belirtilen dosyaya belirttiğimiz içeriği yazabiliriz

$icerik = "Ayşe Demir - Damla Bilgin";
file_put_contents($dosyayolu, $icerik);

echo file_get_contents($dosyayolu);


//  bu hızlı/yardımcı fonksiyonlar haricinde bir dosya üzerinde daha detaylı işlem yapabilmek için dosyayı açabilir, sonrasında bu kaynaktan okuyabilir, önüne/ardına/üstüne yazabilir, belirli bir noktadan itibaren okuyabilir ve işlerimiz bittikten sonra da kapatabiliriz

//  fopen($dosya, $mod) -> belirtilen dosyayı açar ve bir kaynak olarak hazır tutar, $mod değişkeni belli değerler alabilir ve açtığımız bu dosya üstünde ne işlemler yapmak istediğimizi belirttiğimiz alandır. Bu alana gelebilecek değerleri php.net/fopen sayfasındaki mode bölümünden inceleyebilirsiniz

$dosyaKaynagi = fopen("phpsinifi.txt", 'r+');
echo "<pre>";
var_dump($dosyaKaynagi);
echo "</pre><hr>";


//  fread($acilmisDosyaKaynagi, $uzunluk) -> açılmış dosyanın içeriğini belirtilen kadar okur, genelde buraya direkt dosya boyutunu veririz ki tamamını okusun

var_dump(fread($dosyaKaynagi, filesize("phpsinifi.txt")));


//  fwrite($acilmisDosyaKaynagi, $icerik) -> belirtilen içeriği açılmış dosya kaynağına yazar. Yazma işlemi dosyanın öncesine mi, sonrasına mı, tamamını temizleyip direkt üstüne mi gibi işlemler için dosya kaynağını açarken bir parametre ile belirtebiliriz

echo "<hr>";
$yazilasiKaynak = fopen("yazilasi.txt", "w+");
var_dump(fwrite($yazilasiKaynak, "aman desinler desinler şeker yesinler"));


//  fclose($acilmisDosyaKaynagi) -> işimizi bitirdiğimiz kaynağı kapatırız

fclose($dosyaKaynagi);
fclose($yazilasiKaynak);





//
