<?php
session_start();

include "koneksi/koneksi.php";
include "html2text.php";

$sqlprofil=mysql_query("select * from company");
$dataprofil=mysql_fetch_array($sqlprofil);

$sqlsite=mysql_query("select * from sites");
$datasite=mysql_fetch_array($sqlsite);

if (isset($_GET['modul'])) 
{
	switch($_GET['modul'])
	{
		case "home";
		include "modul/home/home.php";
		default;
		
		case "profil";
		include "modul/pages/pages.php";
		break;
			
		case "portfolio";
		include "modul/portfolio/portfolio.php";
		break;
		
		case "portfolio-detail";
		include "modul/portfolio/portfolio-detail.php";
		break;
		
		case "contacts";
		include "modul/contacts/contacts.php";
		break;
		
		case "search";
		include "modul/search/search.php";
		break;
		
		case "news";
		include "modul/news/news.php";
		break;
		
		case "news-items";
		include "modul/news/news_items.php";
		break;
		
		case "news-archive";
		include "modul/news/news_archive.php";
		break;
		
		case "gallery";
		include "modul/gallery/gallery.php";
		break;
		
		case "send-testimony";
		include "modul/send-testimony/send-testimony.php";
		break;	
				
		case "kerja";
		include "modul/kerja/kerja.php";
		break;
		
		case "harga";
		include "modul/harga/harga.php";
		break;
		
	}
}

else
{
	
	include "modul/home/home.php";

}

?>
