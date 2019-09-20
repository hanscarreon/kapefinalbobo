<?php

include '../dbconn.php';
// upload function for products
if(isset($_POST['uploadProd']))
{
	//  info variables
	$prodname   	= $_POST['prodname'];
	$caption    	= $_POST['caption'];
	$fullDesc   	= $_POST['fullDesc'];
	$price      	= $_POST['price'];
	$lvl1			= $_POST['lvl1'];
	$lvl2			= $_POST['lvl2'];
	$lvl3			= $_POST['lvl3'];
	$lvl4			= $_POST['lvl4'];
	$lvl5			= $_POST['lvl5'];
	$lvl6			= $_POST['lvl6'];
	$lvl7			= $_POST['lvl7'];
	$lvl8			= $_POST['lvl8'];
	$datenow 		= date('Y/m/d');

	// picture variables
	$pic1 = $_FILES['pic1'];
    $pic2 = $_FILES['pic2'];
    $pic3 = $_FILES['pic3'];
    $pic4 = $_FILES['pic4'];
    $pic5 = $_FILES['pic5'];
    // fileimg
    $fileName1 = $pic1['name'];
    $fileTmp1  = $pic1['tmp_name'];
    $fileType1 = $pic1['type'];
    $fileErr1  = $pic1['error'];
    $fileSize1 = $pic1['size'];

    $fileName2 = $pic2['name'];
    $fileTmp2 =  $pic2['tmp_name'];
    $fileType2 = $pic2['type'];
    $fileErr2  = $pic2['error'];
    $fileSize2 = $pic2['size'];

    $fileName3 = $pic3['name'];
    $fileTmp3  =  $pic3['tmp_name'];
    $fileType3 = $pic3['type'];
    $fileErr3  = $pic3['error'];
    $fileSize3 = $pic3['size'];

    $fileName4 = $pic4['name'];
    $fileTmp4  =  $pic4['tmp_name'];
    $fileType4 = $pic4['type'];
    $fileErr4  = $pic4['error'];
    $fileSize4 = $pic4['size'];

    $fileName5 = $pic5['name'];
    $fileTmp5  =  $pic5['tmp_name'];
    $fileType5 = $pic5['type'];
    $fileErr5  = $pic5['error'];
    $fileSize5 = $pic5['size'];
    // +++++++++++++++++++++++++++++++++++=

    $fileExt1    = explode(".", $fileName1);
    $fileActExt1 =  strtolower(end($fileExt1));
    $fileFirst1  = strtolower($fileExt1[0]);

    $fileExt2    = explode(".", $fileName2);
    $fileActExt2 =  strtolower(end($fileExt2));
    $fileFirst2  = strtolower($fileExt2[0]);

    $fileExt3    = explode(".", $fileName3);
    $fileActExt3 =  strtolower(end($fileExt3));
    $fileFirst3  = strtolower($fileExt3[0]);

    $fileExt4    = explode(".", $fileName4);
    $fileActExt4 =  strtolower(end($fileExt4));
    $fileFirst4  = strtolower($fileExt4[0]);

    $fileExt5    = explode(".", $fileName5);
    $fileActExt5 =  strtolower(end($fileExt5));
    $fileFirst5  = strtolower($fileExt5[0]);


    $allowed = array('jpg','jpeg','png');
    if(in_array($fileActExt1, $allowed) && in_array($fileActExt2, $allowed) && in_array($fileActExt3, $allowed)  && in_array($fileActExt4, $allowed)  && in_array($fileActExt5, $allowed))
    {
    	if($fileErr1 === 0  && $fileErr2 === 0 && $fileErr3 === 0 && $fileErr4 === 0 && $fileErr5 === 0)
    	{
    		$newName1 = $fileFirst1.".".uniqid("",true).".".$fileActExt1;
            $newName2 = $fileFirst2.".".uniqid("",true).".".$fileActExt2;
            $newName3 = $fileFirst3.".".uniqid("",true).".".$fileActExt3;
            $newName4 = $fileFirst4.".".uniqid("",true).".".$fileActExt4;
            $newName5 = $fileFirst5.".".uniqid("",true).".".$fileActExt5;
            $fileDestination1 = "../../../uploads/products/".$newName1;
            $fileDestination2 = "../../../uploads/products/".$newName2;
            $fileDestination3 = "../../../uploads/products/".$newName3;
            $fileDestination4 = "../../../uploads/products/".$newName4;
            $fileDestination5 = "../../../uploads/products/".$newName5;
            $checkname = "SELECT * FROM products WHERE name=?";
		$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$checkname))
			{
				header("Location: ../../add-product.php?error=sqlerror");
				exit();
			}else
			{
				mysqli_stmt_bind_param($stmt, "s", $prodname);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if($resultCheck > 0)
				{
					header("Location: ../../add-product.php?error=nameistaken".$prodname);
					exit();
				}else
				{
					$insertProd = "INSERT INTO products 
					(name, short_description, full_description, price,lvl1, lvl2, lvl3, lvl4, lvl5, lvl6, lvl7, lvl8, created_at, pic1, pic2, pic3, pic4, pic5)
					VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$insertProd))
					{
						header("Location: ../../add-product.php?error=sqlerror");
						exit();
					}
					else
					{
						mysqli_stmt_bind_param($stmt, "sssiiiiiiiiissssss", $prodname, $caption, $fullDesc, $price, $lvl1, $lvl2, $lvl3, $lvl4, $lvl5, $lvl6, $lvl7, $lvl8, $datenow, $newName1, $newName2, $newName3, $newName4, $newName5);
						mysqli_stmt_execute($stmt);
					    move_uploaded_file($fileTmp1, $fileDestination1);
                        move_uploaded_file($fileTmp2, $fileDestination2);
                        move_uploaded_file($fileTmp3, $fileDestination3);
                        move_uploaded_file($fileTmp4, $fileDestination4);
                        move_uploaded_file($fileTmp5, $fileDestination5);
						header("Location: ../../add-product.php?success=upload");
						exit();
					}
				}
			}
            		
                      // header("Location: ../../uploads/products");

    	}else
    	{
	    	header("Location: ../../add-product.php?error=filecorrupted");
			exit();
    	}
    }else
    {
    	header("Location: ../../add-product.php?error=picnotallowed");
		exit();
	
    }



	


}