<?php
	session_start();
	include('../../admin/config/config.php');
	//them so luong
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id']!=$id){
				$product[]= array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'SoLuong'=>$cart_item['SoLuong'],'GiaBan'=>$cart_item['GiaBan'],'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$cart_item['HinhAnh']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['SoLuong'] + 1;
				if($cart_item['SoLuong']<=9){
					
					$product[]= array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'SoLuong'=>$tangsoluong,'GiaBan'=>$cart_item['GiaBan'],'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$cart_item['HinhAnh']);
				}else{
					$product[]= array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'SoLuong'=>$cart_item['SoLuong'],'GiaBan'=>$cart_item['GiaBan'],'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$cart_item['HinhAnh']);
				}
				$_SESSION['cart'] = $product;
			}
		}
		header('Location:../../index.php?page=cart');
	}
	//tru so luong
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id']!=$id){
				$product[]= array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'SoLuong'=>$cart_item['SoLuong'],'GiaBan'=>$cart_item['GiaBan'],'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$cart_item['HinhAnh']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['SoLuong'] - 1;
				if($cart_item['SoLuong']>1){
					
					$product[]= array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'SoLuong'=>$tangsoluong,'GiaBan'=>$cart_item['GiaBan'],'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$cart_item['HinhAnh']);
				}else{
					$product[]= array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'SoLuong'=>$cart_item['SoLuong'],'GiaBan'=>$cart_item['GiaBan'],'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$cart_item['HinhAnh']);
				}
				$_SESSION['cart'] = $product;
			}
			
		}
		header('Location:../../index.php?page=cart');
	}
	//xoa san pham
	if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['cart'] as $cart_item){

			if($cart_item['id']!=$id){
				$product[]= array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'SoLuong'=>$cart_item['SoLuong'],'GiaBan'=>$cart_item['GiaBan'],'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$cart_item['HinhAnh']);
			}

		$_SESSION['cart'] = $product;
		header('Location:../../index.php?page=cart');
		}
	}
	//xoa tat ca
	if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
		unset($_SESSION['cart']);
		header('Location:../../index.php?page=cart');
	}
	//them sanpham vao gio hang
	if(isset($_POST['addCart'])){
        // session_destroy();
		$id=$_GET['IdSP'];
		$SoLuong=1;
		$sql ="SELECT * FROM tblsanpham WHERE IdSP='".$id."' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row){
			$new_product=array(array('TenSP'=>$row['TenSP'],'id'=>$id, 'Mau'=>$row['Mau'],'SoLuong'=>$SoLuong,'GiaBan'=>$row['GiaBan'], 'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$row['HinhAnh']));
			//kiem tra session gio hang ton tai
			if(isset($_SESSION['cart'])){
				$found = false;
				foreach($_SESSION['cart'] as $cart_item){
					//neu du lieu trung
					if($cart_item['id']==$id){
						$product[]= array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'Mau'=>$row['Mau'],'SoLuong'=>$SoLuong+1,'GiaBan'=>$cart_item['GiaBan'],'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$cart_item['HinhAnh']);
						$found = true;
					}else{
						//neu du lieu khong trung
						$product[]= array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'Mau'=>$row['Mau'],'SoLuong'=>$cart_item['SoLuong'],'GiaBan'=>$cart_item['GiaBan'],'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$cart_item['HinhAnh']);
					}
				}
				if($found == false){
					//lien ket du lieu new_product voi product
					$_SESSION['cart']=array_merge($product,$new_product);
				}else{
					$_SESSION['cart']=$product;
				}
			}else{
				$_SESSION['cart'] = $new_product;
			}

		}
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		
	}

	//mua ngay chuyen toi gio hang
	if(isset($_POST['buyCart'])){
        // session_destroy();
		$id=$_GET['IdSP'];
		$SoLuong=1;
		$sql ="SELECT * FROM tblsanpham WHERE IdSP='".$id."' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row){
			$new_product=array(array('TenSP'=>$row['TenSP'],'id'=>$id, 'Mau'=>$row['Mau'],'SoLuong'=>$SoLuong,'GiaBan'=>$row['GiaBan'], 'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$row['HinhAnh']));
			//kiem tra session gio hang ton tai
			if(isset($_SESSION['cart'])){
				$found = false;
				foreach($_SESSION['cart'] as $cart_item){
					//neu du lieu trung
					if($cart_item['id']==$id){
						$product[]= array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'Mau'=>$row['Mau'],'SoLuong'=>$SoLuong+1,'GiaBan'=>$cart_item['GiaBan'],'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$cart_item['HinhAnh']);
						$found = true;
					}else{
						//neu du lieu khong trung
						$product[]= array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'Mau'=>$row['Mau'],'SoLuong'=>$cart_item['SoLuong'],'GiaBan'=>$cart_item['GiaBan'],'KhuyenMai'=>$row['KhuyenMai'],'HinhAnh'=>$cart_item['HinhAnh']);
					}
				}
				if($found == false){
					//lien ket du lieu new_product voi product
					$_SESSION['cart']=array_merge($product,$new_product);
				}else{
					$_SESSION['cart']=$product;
				}
			}else{
				$_SESSION['cart'] = $new_product;
			}

		}
		header('Location:../../index.php?page=cart');
		
	}
	
?>