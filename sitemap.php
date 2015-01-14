<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath ( dirname ( __FILE__ ) . $ds . '..' ) . $ds;
require_once "{$base_dir}Marakiwis{$ds}DataAccess{$ds}DataAccess.php";
require_once "{$base_dir}Config{$ds}Constant.php";
?>
<urlset
      xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
      xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
      xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
	<url>
	  <loc>http://nicnat.cl/</loc>
	  <changefreq>always</changefreq>
	  <priority>1.00</priority>
	</url>
	<url>
	  <loc>http://nicnat.cl/index.html</loc>
	  <lastmod>2014-10-17T02:07:16+00:00</lastmod>
	  <changefreq>always</changefreq>
	  <priority>0.80</priority>
	</url>
</urlset>