function akst_share(id, url, title) {
	var form = $('akst_form');
	var post_id = $('akst_post_id');
	
	if (form.style.display == 'block' && post_id.value == id) {
		form.style.display = 'none';
		return;
	}
	
	var link = $('akst_link_' + id);
	var offset = Position.cumulativeOffset(link);

	$("akst_delicious").href = akst_share_url("http://del.icio.us/post?url={url}&title={title}", url, title);
	$("akst_news2-ru").href = akst_share_url("http://news2.ru/add_story.php?url={url}", url, title);
	$("akst_digg").href = akst_share_url("http://digg.com/submit?phase=2&url={url}&title={title}", url, title);
	$("akst_mister").href = akst_share_url("http://www.mister-wong.ru/add_url/?bm_url={url}&bm_description={title}", url, title);
	$("akst_furl").href = akst_share_url("http://furl.net/storeIt.jsp?u={url}&t={title}", url, title);
	$("akst_linkstore").href = akst_share_url(" http://www.linkstore.ru/servlet/LinkStore?a=add&url={url}&title={title}", url, title);
	$("akst_netscape").href = akst_share_url(" http://www.netscape.com/submit/?U={url}&T={title}", url, title);
	$("akst_myscoop").href = akst_share_url("http://myscoop.ru/add/?title={title}&URL={url}", url, title);
	$("akst_yahoo_myweb").href = akst_share_url("http://myweb2.search.yahoo.com/myresults/bookmarklet?u={url}&t={title}", url, title);
	$("akst_vaau").href = akst_share_url("http://www.vaau.ru/submit/?action=step2&url={url}", url, title);
	$("akst_technorati").href = akst_share_url("http://www.technorati.com/faves?add={url}", url, title);
	$("akst_bobrdobr").href = akst_share_url("http://www.bobrdobr.net/add.html?url={url}&title={title}", url, title);
	$("akst_google_bmarks").href = akst_share_url("  http://www.google.com/bookmarks/mark?op=edit&bkmk={url}&title={title}", url, title);
	$("akst_newsland").href = akst_share_url("http://www.newsland.ru/News/Add/type/news/", url, title);
	$("akst_reddit").href = akst_share_url("http://reddit.com/submit?url={url}&title={title}", url, title);
	$("akst_rumark").href = akst_share_url("http://rumarkz.ru/bookmarks/?action=add&popup=1&address={url}&title={title}", url, title);
	$("akst_blogmarks").href = akst_share_url("http://blogmarks.net/my/new.php?mini=1&url={url}&title={title}", url, title);
	$("akst_memori").href = akst_share_url("http://memori.ru/link/?sm=1&u_data[url]={url}&u_data[name]={title}", url, title);
	$("akst_windows_live").href = akst_share_url("https://favorites.live.com/quickadd.aspx?marklet=1&mkt=en-us&url={url}&title={title}&top=1", url, title);
	$("akst_moemesto").href = akst_share_url("http://moemesto.ru/post.php?url={url}&title={title}", url, title);

	post_id.value = id;

	form.style.left = offset[0] + 'px';
	form.style.top = (offset[1] + link.offsetHeight + 3) + 'px';
	form.style.display = 'block';
}

function akst_share_url(base, url, title) {
	base = base.replace('{url}', url);
	return base.replace('{title}', title);
}

function akst_share_tab(tab) {
	var tab1 = document.getElementById('akst_tab1');
	var tab2 = document.getElementById('akst_tab2');
	var body1 = document.getElementById('akst_social');
	var body2 = document.getElementById('akst_email');
	
	switch (tab) {
		case '1':
			tab2.className = '';
			tab1.className = 'selected';
			body2.style.display = 'none';
			body1.style.display = 'block';
			break;
		case '2':
			tab1.className = '';
			tab2.className = 'selected';
			body1.style.display = 'none';
			body2.style.display = 'block';
			break;
	}
}

function akst_xy(id) {
	var element = $(id);
	var x = 0;
	var y = 0;
}
