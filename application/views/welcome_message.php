<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<!-- <style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style> -->
	<style>
		html,body{
		  font-family:"Trebuchet MS", Helvetica, sans-serif;
		  text-align:center;
		  min-width:260px;
		  color:#333;
		}
		#main{
		  margin:30px auto;
		  padding:15px;
		  border:0px solid;
		  border-radius:5px;
		  background:#eee;
		}
		img{
		  max-width: 100%; 
		  display: block; 
		  height: auto;
		  margin: auto;
		}
		#img-div{
		  margin:-5px;
		  margin-top:20px;
		  width:100%;
		  border:5px solid white;
		  background:white;
		}
		#img-caption{
		  margin:15px;
		}
		#headline{
		  margin-top:50px;
		  text-align:left;
		}
		ul{
		  max-width:550px;
		  margin:0 auto;
		  text-align:left;
		}
		li{
		  margin: 10px;
		}
		blockquote{
		  font-style: italic;
		}
	</style>
</head>
<body>

<!-- <div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div> -->
	<div id="main">
		<h1 id="title">Andhika Yoga Perdana's Story</h1> <!--title-->
		<div></div> <!--caption-->
		<div id="img-div">
			<img id="image" src="http://localhost/bcit-ci-CodeIgniter-b73eb19/public/IMG_20180805_111704.jpg" alt="Fotoku bersama adik">
			<div id="img-caption">
				Foto bersama adik di Duyung Trawas Hill saat libur kuliah 2018
			</div>
		</div> <!--image-->
		<div id="tribute-info">
			<ul>
				<h3 id="headline">Jalan Cerita Hidupku untuk Menjadi Seorang Programmer:</h3>
				<li><strong>1999</strong> - Lahir di Kota Surabaya pada tanggal 27 September</li>
				<li><strong>2003</strong> - Mulai bersekolah di TK Hang Tuah 1 Surabaya</li>
				<li><strong>2005</strong> - Melanjutkan jenjang pendidikan sekolah dasar di SD Hang Tuah 1 Surabaya yang lokasinya berada di depan TK Hang Tuah 1 Surabaya</li>
				<li><strong>2006</strong> - Mulai masuk ke TPA (Tempat Pendidikan Al-Quran) Al-Hidayah di dekat rumah</li>
				<li><strong>2011</strong> - Lulus dari sekolah dasar dan melanjutkan Pendidikan di SMP Negeri 12 Surabaya, salah satu sekolah kawasan di Surabaya</li>
				<li><strong>2014</strong> - Mampu menyelesaikan Pendidikan al-quran dari tingkat tilawati 1 sampai khatam al-quran</li>
				<li><strong>2014</strong> - Berhasil menuntaskan Pendidikan sekolah menengah pertama dan melanjutkan Pendidikan di SMAN 5 Surabaya, salah satu SMA terbaik di Indonesia</li>
				<li><strong>2014</strong> - Dilantik menjadi pengurus masjid periode 2014-2019 dan mulai aktif di berbagai event keagamaan</li>
				<li>
					<strong>2015</strong> - Menjadi panitia di berbagai event di SMAN 5 Surabaya
					<ul>
						<li>SAMURAI 2015 (Sambutan Murid Baru Almamater 5)</li>
						<li>SENYUMAN 2015 (Senangnya Umat Berkhitan)</li>
						<li>SSF 2015 (Smala Science Fair)</li>
						<li>Tabligh Akbar</li>
					</ul>
				</li>
				<li><strong>2017</strong> - Memutuskan untuk menjadi seorang programmer dengan melanjutkan studi di Informatika ITS Surabaya, salah satu kampus terbaik di Indonesia</li>
				<li><strong>2017</strong> - Menjadi Staff Badan Semi Otonom Big Event Festival Sholawat Rebana ITS periode 2017-2018</li>
				<li>
					<strong>2018</strong> - Menjadi panitia di berbagai event di lingkup ITS
					<ul>
						<li>PEKSIMITS 2018 (Pekan Seni Mahasiswa ITS)</li>
						<li>Panitia Tabligh Akbar with Ustdaz Abdul Somad</li>
						<li>Panitia Inaugurasi FTIF 2018</li>
						<li>TC Arena 2018</li>
						<li>Schematics 2018</li>
					</ul>
				</li>
			</ul>
			<blockquote>That&#8217s what&#8217s cool about working with computers. They don&#8217t argue, they remember everything, and they don&#8217t drink all your beer</blockquote>
			<h3>Saat ini masih duduk di bangku kuliah menempuh semester 6. Kisah-kisah tersebut masih terus berlanjut. Terus pantau halaman ini untuk mengetahui kelanjutan kisah perjalananku menjadi &#8220The Real Programmer&#8221</h3>
			<h3>Apa itu Programmer? <a id="tribute-link" href=https://www.computerhope.com/jargon/p/progmmer.htm" target="_blank">Visit here</a></h3>
		</div> <!--tribute-info-->
	</div>

</body>
</html>