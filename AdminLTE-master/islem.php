<?php 
ob_start();
session_start();

require_once('baglan.php');

// ########################### masraf ekle
if(isset($_POST['masrafekle'])){

$masrafekle = $baglan->prepare('INSERT into masraflar SET
		basliq=:basliq,
		aciqlama=:aciqlama,
		tutar=:tutar,
		zaman=:zaman,
		kategori=:kategori
	');
$ekle=$masrafekle->execute([
	'basliq'=>$_POST['basliq'],
	'aciqlama'=>$_POST['aciqlama'],
	'tutar'=>$_POST['tutar'],
	'zaman'=>$_POST['zaman'],
	'kategori'=>$_POST['kategori']
]);
	if($ekle){
		Header('location:sayfa.php?sayfa=masraflar&durum=ok');
	}else{
		Header('location:sayfa.php?sayfa=masraflar&durum=hata');
	}
}





	//############################ masraf duzenle
	if(isset($_POST['masrafduzenle'])){

		$id = $_POST['id'];


		$masrafduzenle = $baglan->prepare("UPDATE masraflar SET
		basliq=:basliq,
		aciqlama=:aciqlama,
		tutar=:tutar,
		zaman=:zaman,
		kategori=:kategori 
		WHERE id='$id' 
		");


		$duz = $masrafduzenle->execute(array(
			'basliq' => $_POST['basliq'],
			'aciqlama' => $_POST['aciqlama'],
			'tutar' => $_POST['tutar'],
			'zaman' => $_POST['zaman'],
			'kategori' => $_POST['kategori']
		));
		//echo print_r($duz); exit();
		if($duz){
			Header('location:sayfa.php?sayfa=masraflar&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=masraflar&durum=hata');
		}
	}




############################## masraf sil
	if(isset($_POST['masrafsil'])){
		$masrafsil = $baglan->prepare('DELETE from masraflar WHERE id=:id');
		$masrafsil->execute(['id'=>$_POST['id']]);

		if($masrafsil){
			Header('location:sayfa.php?sayfa=masraflar&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=masraflar&durum=hata');
		}
	}


################################ odeme ekle
	if(isset($_POST['odemeekle'])){
		$odemeekle = $baglan->prepare("INSERT into odemeler SET 
			basliq =:basliq,
			aciqlama=:aciqlama,
			kime=:kime,
			tutar=:tutar,
			zaman=:zaman,
			para_alinan_zaman=:para_alinan_zaman
			");
		$odekle=$odemeekle->execute([
			'basliq'=>$_POST['basliq'],
			'aciqlama'=>$_POST['aciqlama'],
			'kime'=>$_POST['kime'],
			'tutar'=>$_POST['tutar'],
			'zaman'=>$_POST['zaman'],
			'para_alinan_zaman'=>$_POST['para_alinan_zaman']
		]);


		if($odekle){
			Header('location:sayfa.php?sayfa=odemeler&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=odemeler&durum=no');
		}
	}

################################## odeme duzenle
	if(isset($_POST['odemeduzenle'])){
		$id = $_POST['id'];

		$odemeduzenle = $baglan->prepare("UPDATE odemeler SET
		basliq=:basliq,
		aciqlama=:aciqlama,
		kime=:kime,
		tutar=:tutar,
		zaman=:zaman,
		para_alinan_zaman=:para_alinan_zaman 
		WHERE id='$id' 
		");


		$odemduz = $odemeduzenle->execute(array(
			'basliq' => $_POST['basliq'],
			'aciqlama' => $_POST['aciqlama'],
			'kime' => $_POST['kime'],
			'tutar' => $_POST['tutar'],
			'zaman' => $_POST['zaman'],
			'para_alinan_zaman' => $_POST['para_alinan_zaman']
		));
		//echo print_r($duz); exit();
		if($odemduz){
			Header('location:sayfa.php?sayfa=odemeler&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=odemeler&durum=hata');
		}
	}

############################### odeme sil
	if(isset($_POST['odemesil'])){
		$odemesil = $baglan->prepare('DELETE from odemeler where id=:id');
		$odemesil->execute(['id'=>$_POST['id']]);

		if($odemesil){
			Header('location:sayfa.php?sayfa=odemeler&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=odemeler&durum=hata');
		}
	}

########################################## calisan ekle
	if(isset($_POST['calisanekle'])){
		$calisanekle = $baglan->prepare("INSERT into calisanlar SET 
			ad =:ad,
			yas=:yas,
			bolum=:bolum,
			maas=:maas,
			is_bas_vaxt=:is_bas_vaxt
	
			");
		$calekle=$calisanekle->execute([
			'ad'=>$_POST['ad'],
			'yas'=>$_POST['yas'],
			'bolum'=>$_POST['bolum'],
			'maas'=>$_POST['maas'],
			'is_bas_vaxt'=>$_POST['is_bas_vaxt']

		]);


		if($calekle){
			Header('location:sayfa.php?sayfa=calisanlar&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=calisanlar&durum=no');
		}
	}


	################################## Calisan duzenle
	if(isset($_POST['calisanduzenle'])){
		$id = $_POST['id'];

		$calisanduzenle = $baglan->prepare("UPDATE calisanlar SET
			ad =:ad,
			yas=:yas,
			bolum=:bolum,
			maas=:maas,
			is_bas_vaxt=:is_bas_vaxt 
		WHERE id='$id' 
		");


		$calduz = $calisanduzenle->execute(array(
			'ad'=>$_POST['ad'],
			'yas'=>$_POST['yas'],
			'bolum'=>$_POST['bolum'],
			'maas'=>$_POST['maas'],
			'is_bas_vaxt'=>$_POST['is_bas_vaxt']
		));
		//echo print_r($duz); exit();
		if($calduz){
			Header('location:sayfa.php?sayfa=calisanlar&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=calisanlar&durum=hata');
		}
	}



	############################### odeme sil
	if(isset($_POST['calisansil'])){
		$calsil = $baglan->prepare('DELETE from calisanlar where id=:id');
		$calsil->execute(['id'=>$_POST['id']]);

		if($calsil){
			Header('location:sayfa.php?sayfa=calisanlar&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=calisanlar&durum=hata');
		}
	}



	########################################## alacaq ekle
	if(isset($_POST['alacaqekle'])){
		$alacaqekle = $baglan->prepare("INSERT into alacaqlar SET 
			ad =:ad,
			aciqlama=:aciqlama,
			tutar=:tutar,
			zaman=:zaman
	
			");
		$alekle=$alacaqekle->execute([
			'ad'=>$_POST['ad'],
			'aciqlama'=>$_POST['aciqlama'],
			'tutar'=>$_POST['tutar'],
			'zaman'=>$_POST['zaman']

		]);


		if($alekle){
			Header('location:sayfa.php?sayfa=alacaqlar&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=alacaqlar&durum=hata');
		}
	}


	################################## alacaq duzenle
	if(isset($_POST['alacaqduzenle'])){
		$id = $_POST['id'];

		$alacaqduzenle = $baglan->prepare("UPDATE alacaqlar SET
			ad =:ad,
			aciqlama=:aciqlama,
			tutar=:tutar,
			zaman=:zaman 
		WHERE id='$id' 
		");


		$alduz = $alacaqduzenle->execute(array(
			'ad'=>$_POST['ad'],
			'aciqlama'=>$_POST['aciqlama'],
			'tutar'=>$_POST['tutar'],
			'zaman'=>$_POST['zaman']
		));
		//echo print_r($duz); exit();
		if($alduz){
			Header('location:sayfa.php?sayfa=alacaqlar&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=alacaqlar&durum=hata');
		}
	}



		############################### alacaq sil
	if(isset($_POST['alacaqsil'])){
		$alsil = $baglan->prepare('DELETE from alacaqlar where id=:id');
		$alsil->execute(['id'=>$_POST['id']]);

		if($alsil){
			Header('location:sayfa.php?sayfa=alacaqlar&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=alacaqlar&durum=hata');
		}
	}


		########################################## satis ekle
	if(isset($_POST['satisekle'])){
		$satisekle = $baglan->prepare("INSERT into satis SET 
			basliq =:basliq,
			aciqlama=:aciqlama,
			tutar=:tutar,
			zaman=:zaman,
			odeme=:odeme
			");
		$satekle=$satisekle->execute([
			'basliq'=>$_POST['basliq'],
			'aciqlama'=>$_POST['aciqlama'],
			'tutar'=>$_POST['tutar'],
			'zaman'=>$_POST['zaman'],
			'odeme'=>$_POST['odeme']
		]);


		if($satekle){
			Header('location:sayfa.php?sayfa=satislar&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=satislar&durum=hata');
		}
	}

	################################## satis duzenle
	if(isset($_POST['satisduzenle'])){
		$id = $_POST['id'];

		$satisduzenle = $baglan->prepare("UPDATE satis SET
			basliq =:basliq,
			aciqlama=:aciqlama,
			tutar=:tutar,
			zaman=:zaman,
			odeme=:odeme 
		WHERE id='$id' 
		");


		$satduz = $satisduzenle->execute(array(
			'basliq'=>$_POST['basliq'],
			'aciqlama'=>$_POST['aciqlama'],
			'tutar'=>$_POST['tutar'],
			'zaman'=>$_POST['zaman'],
			'odeme'=>$_POST['odeme']
		));
		//echo print_r($duz); exit();
		if($satduz){
			Header('location:sayfa.php?sayfa=satislar&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=satislar&durum=hata');
		}
	}


		############################### satis sil
	if(isset($_POST['satissil'])){
		$satsil = $baglan->prepare('DELETE from satis where id=:id');
		$satsil->execute(['id'=>$_POST['id']]);

		if($satsil){
			Header('location:sayfa.php?sayfa=satislar&durum=ok');
		}else{
			Header('location:sayfa.php?sayfa=satislar&durum=hata');
		}
	}


		########################################## nakit ekle
	if(isset($_POST['nakitekle'])){
		if($_POST['nakit'] == 1){
		$nakitekle = $baglan->prepare("INSERT into nakit SET 
			basliq =:basliq,
			aciqlama=:aciqlama,
			para_gelen=:para_gelen,
			zaman=:zaman
			");
		$naktekle=$nakitekle->execute([
			'basliq'=>$_POST['basliq'],
			'aciqlama'=>$_POST['aciqlama'],
			'para_gelen'=>$_POST['tutar'],
			'zaman'=>$_POST['zaman']

		]);
	}else{
		$nakitekle = $baglan->prepare("INSERT into nakit SET 
			basliq =:basliq,
			aciqlama=:aciqlama,
			para_giden=:para_giden,
			zaman=:zaman
			");
		$naktekle=$nakitekle->execute([
			'basliq'=>$_POST['basliq'],
			'aciqlama'=>$_POST['aciqlama'],
			'para_giden'=>$_POST['tutar'],
			'zaman'=>$_POST['zaman']

		]);
	}

		if($naktekle){
			Header('location:nakit.php?durum=ok');
		}else{
			Header('location:nakit.php?durum=hata');
		}
	}

		############################### nakit sil
	if(isset($_POST['nakitsil'])){
		$nakitsil = $baglan->prepare('DELETE from nakit where id=:id');
		$nakitsil->execute(['id'=>$_POST['id']]);

		if($nakitsil){
			Header('location:nakit.php?durum=ok');
		}else{
			Header('location:nakit.php?durum=hata');
		}
	}


	######################### kayit
	if(isset($_POST['kaydet'])){
		$firma = htmlspecialchars($_POST['firma']);
		$email = htmlspecialchars($_POST['email']);
		$sifre = htmlspecialchars($_POST['sifre']);
		$yetkili = htmlspecialchars($_POST['yetkili']);
		$guclusifre = md5($sifre);

		$kullanici = $baglan->prepare('SELECT * from kullanicilar where email=:email');
		$kullanici->execute(['email'=>$email]);
		$say=$kullanici->rowCount();
		if($say == 0){
			$kulkaydet = $baglan->prepare('INSERT into kullanicilar set
				firma=:firma,
				email=:email,
				sifre=:sifre,
				yetkili=:yetkili
				');
			$kayd=$kulkaydet->execute([
				'firma'=>$firma,
				'email'=>$email,
				'sifre'=>$guclusifre,
				'yetkili'=>$yetkili
			]);
		}else{
			Header('location:kayit.php?durum=emailvar');
		}


		if($kayd){
			Header('location:kayit.php?durum=basarili');
		}else{
			Header('location:login.php?durum=basarisiz');
		}
	}



	################ giris - login
	if(isset($_POST['login'])){
		$email = htmlspecialchars($_POST['email']);
		$sifre = htmlspecialchars($_POST['sifre']);
		$guclusifre = md5($sifre);

		$kullanici = $baglan->prepare('SELECT * from kullanicilar where email=:email and sifre=:sifre');
		$kullanici->execute(['email'=>$email,'sifre'=>$guclusifre]);
		$say=$kullanici->rowCount();
		if($say>0){
			$_SESSION['girisoldu'] = $email;
			Header('location:index.php?durum=basarili');
		}else{
			Header('location:login.php?durum=hata');
		}
	}




?>