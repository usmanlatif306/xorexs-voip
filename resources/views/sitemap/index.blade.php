<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<?php echo '<?xml-stylesheet type="text/xsl" href="'.asset("theme/css/sitemap.xsl").'"?>'?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	@foreach ($data['pages'] as $route => $updated_at)
	<url>
		<loc>{{ route($route) }}</loc>
		<lastmod>{{ $updated_at->tz('UTC')->toAtomString() }}</lastmod>
	</url>
	@endforeach
	@foreach ($data['plicies'] as $route => $updated_at)
	<url>
		<loc>{{ route('policy_page',$route) }}</loc>
		<lastmod>{{ $updated_at->tz('UTC')->toAtomString() }}</lastmod>
	</url>
	@endforeach
</urlset>