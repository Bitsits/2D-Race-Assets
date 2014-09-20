/* generated javascript */
var skin = 'dolphin';
var stylepath = '/w/skins';

/* MediaWiki:Common.js */
if (wgArticleId == 0 && wgUserName) { var slash = wgPageName.indexOf('/'); var norm = wgPageName.substr(0, slash) + wgPageName.substr(slash).toLowerCase(); var test = 'User:' + wgUserName.replace(/ /g, '_') + '/skin.'; var ext = null; if (norm == test + 'js') ext = 'js'; else if (norm == test + 'css') ext = 'css'; if (ext != null) window.location.href = window.location.href.replace(/\/skin.(css|js)/i, '/' + skin + '.' + ext);}
if (wgAction == "edit" || wgAction == "submit" || wgPageName == "Special:Upload")
{ importScript("MediaWiki:Common.js/edit.js")
}
else if (wgPageName == "Special:Watchlist")
{ importScript("MediaWiki:Common.js/watchlist.js")
}
else if (wgPageName == "Special:Search")
{ importScript("MediaWiki:Common.js/search.js")
}
var hasClass = (function () { var reCache = {}; return function (element, className) { return (reCache[className] ? reCache[className] : (reCache[className] = new RegExp("(?:\\s|^)" + className + "(?:\\s|$)"))).test(element.className);};})(); if (navigator.appName == "Microsoft Internet Explorer")
{ var oldWidth; var docEl = document.documentElement; function fixIEScroll()
{ if (!oldWidth || docEl.clientWidth > oldWidth)
doFixIEScroll(); else
setTimeout(doFixIEScroll, 1); oldWidth = docEl.clientWidth;}
function doFixIEScroll() { docEl.style.overflowX = (docEl.scrollWidth - docEl.clientWidth < 4) ? "hidden" : "";}
document.attachEvent("onreadystatechange", fixIEScroll); document.attachEvent("onresize", fixIEScroll); if (document.createStyleSheet) { document.createStyleSheet().addRule('.IPA', 'font-family: "Doulos SIL", "Charis SIL", Gentium, "DejaVu Sans", Code2000, "TITUS Cyberbit Basic", "Arial Unicode MS", "Lucida Sans Unicode", "Chrysanthi Unicode";');}
appendCSS( '@media print { sup, sub, p, .documentDescription { line-height: normal; }}'); appendCSS('div.overflowbugx { overflow-x: scroll !important; overflow-y: hidden !important; } div.overflowbugy { overflow-y: scroll !important; overflow-x: hidden !important; }'); if (navigator.appVersion.substr(22, 1) == "6") { importScript("MediaWiki:Common.js/IE60Fixes.js")
}
}
var autoCollapse = 2; var collapseCaption = "hide"; var expandCaption = "show"; function collapseTable( tableIndex )
{ var Button = document.getElementById( "collapseButton" + tableIndex ); var Table = document.getElementById( "collapsibleTable" + tableIndex ); if ( !Table || !Button ) { return false;}
var Rows = Table.rows; if ( Button.firstChild.data == collapseCaption ) { for ( var i = 1; i < Rows.length; i++ ) { Rows[i].style.display = "none";}
Button.firstChild.data = expandCaption;} else { for ( var i = 1; i < Rows.length; i++ ) { Rows[i].style.display = Rows[0].style.display;}
Button.firstChild.data = collapseCaption;}
}
function createCollapseButtons()
{ var tableIndex = 0; var NavigationBoxes = new Object(); var Tables = document.getElementsByTagName( "table" ); for ( var i = 0; i < Tables.length; i++ ) { if ( hasClass( Tables[i], "collapsible" ) ) { var HeaderRow = Tables[i].getElementsByTagName( "tr" )[0]; if (!HeaderRow) continue; var Header = HeaderRow.getElementsByTagName( "th" )[0]; if (!Header) continue; NavigationBoxes[ tableIndex ] = Tables[i]; Tables[i].setAttribute( "id", "collapsibleTable" + tableIndex ); var Button = document.createElement( "span" ); var ButtonLink = document.createElement( "a" ); var ButtonText = document.createTextNode( collapseCaption ); Button.className = "collapseButton"; ButtonLink.style.color = Header.style.color; ButtonLink.setAttribute( "id", "collapseButton" + tableIndex ); ButtonLink.setAttribute( "href", "javascript:collapseTable(" + tableIndex + ");" ); ButtonLink.appendChild( ButtonText ); Button.appendChild( document.createTextNode( "[" ) ); Button.appendChild( ButtonLink ); Button.appendChild( document.createTextNode( "]" ) ); Header.insertBefore( Button, Header.childNodes[0] ); tableIndex++;}
}
for ( var i = 0; i < tableIndex; i++ ) { if ( hasClass( NavigationBoxes[i], "collapsed" ) || ( tableIndex >= autoCollapse && hasClass( NavigationBoxes[i], "autocollapse" ) ) ) { collapseTable( i );}
else if ( hasClass( NavigationBoxes[i], "innercollapse" ) ) { var element = NavigationBoxes[i]; while (element = element.parentNode) { if ( hasClass( element, "outercollapse" ) ) { collapseTable ( i ); break;}
}
}
}
}
addOnloadHook( createCollapseButtons ); var NavigationBarHide = '[' + collapseCaption + ']'; var NavigationBarShow = '[' + expandCaption + ']'; function toggleNavigationBar(indexNavigationBar)
{ var NavToggle = document.getElementById("NavToggle" + indexNavigationBar); var NavFrame = document.getElementById("NavFrame" + indexNavigationBar); if (!NavFrame || !NavToggle) { return false;}
if (NavToggle.firstChild.data == NavigationBarHide) { for (var NavChild = NavFrame.firstChild; NavChild != null; NavChild = NavChild.nextSibling) { if (hasClass(NavChild, 'NavContent') || hasClass(NavChild, 'NavPic')) { NavChild.style.display = 'none';}
}
NavToggle.firstChild.data = NavigationBarShow;} else if (NavToggle.firstChild.data == NavigationBarShow) { for (var NavChild = NavFrame.firstChild; NavChild != null; NavChild = NavChild.nextSibling) { if (hasClass(NavChild, 'NavContent') || hasClass(NavChild, 'NavPic')) { NavChild.style.display = 'block';}
}
NavToggle.firstChild.data = NavigationBarHide;}
}
function createNavigationBarToggleButton()
{ var indexNavigationBar = 0; var divs = document.getElementsByTagName("div"); for (var i = 0; NavFrame = divs[i]; i++) { if (hasClass(NavFrame, "NavFrame")) { indexNavigationBar++; var NavToggle = document.createElement("a"); NavToggle.className = 'NavToggle'; NavToggle.setAttribute('id', 'NavToggle' + indexNavigationBar); NavToggle.setAttribute('href', 'javascript:toggleNavigationBar(' + indexNavigationBar + ');'); var isCollapsed = hasClass( NavFrame, "collapsed" ); for (var NavChild = NavFrame.firstChild; NavChild != null && !isCollapsed; NavChild = NavChild.nextSibling) { if ( hasClass( NavChild, 'NavPic' ) || hasClass( NavChild, 'NavContent' ) ) { if ( NavChild.style.display == 'none' ) { isCollapsed = true;}
}
}
if (isCollapsed) { for (var NavChild = NavFrame.firstChild; NavChild != null; NavChild = NavChild.nextSibling) { if ( hasClass( NavChild, 'NavPic' ) || hasClass( NavChild, 'NavContent' ) ) { NavChild.style.display = 'none';}
}
}
var NavToggleText = document.createTextNode(isCollapsed ? NavigationBarShow : NavigationBarHide); NavToggle.appendChild(NavToggleText); for(var j=0; j < NavFrame.childNodes.length; j++) { if (hasClass(NavFrame.childNodes[j], "NavHead")) { NavFrame.childNodes[j].appendChild(NavToggle);}
}
NavFrame.setAttribute('id', 'NavFrame' + indexNavigationBar);}
}
}
addOnloadHook( createNavigationBarToggleButton ); if (wgPageName == 'Main_Page' || wgPageName == 'Talk:Main_Page')
addOnloadHook(function () { var nstab = document.getElementById('ca-nstab-main')
if (nstab && wgUserLanguage=='en') { while (nstab.firstChild) nstab = nstab.firstChild
nstab.nodeValue = 'Main Page'
}
}
)
function sysopFunctions() { if ( wgUserGroups && !window.disableSysopJS ) { for ( var g = 0; g < wgUserGroups.length; ++g ) { if ( wgUserGroups[g] == "sysop" ) { importScript( "MediaWiki:Sysop.js" ); break;}
}
}
}
addOnloadHook( sysopFunctions ); var wgGuideName = wgPageName.split("/", 1)[0] || wgPageName; wgGuideName = wgGuideName.split(':', 2).join(":"); if ( wgNamespaceNumber == 0 ) importScript('MediaWiki:Common.js/BookSearch.js'); addOnloadHook(featured_template); function featured_template()
{ if(document.getElementById('featured_icon'))
{ var bodyContent=document.getElementById('bodyContent'); bodyContent.insertBefore(document.getElementById('featured_icon'),bodyContent.childNodes[0]);}
}
addOnloadHook(open_search_links); function open_search_links() { if((document.getElementById('open_search')) && (document.getElementById('open_search').nodeName=='SPAN')) { var link=document.getElementById('open_search').childNodes[0]; addHandler(link, 'click', add_open_search);}
}
function add_open_search(event) { if((typeof(window.external)=="object") && ((typeof(window.external.AddSearchProvider)=="unknown") || (typeof(window.external.AddSearchProvider)=="function"))) window.external.AddSearchProvider("http://strategywiki.org/w/opensearch_desc.php"); else window.alert("You will need a browser which supports OpenSearch to install this plugin, such as Mozilla Firefox."); event.preventDefault(); event.returnValue=false; return false;}
addOnloadHook(upload_categories); function upload_categories() { if((document.getElementById('upload')) && (document.getElementById('upload').nodeName=='FORM')) { var upload_form=document.getElementById('upload'); addHandler(upload_form, 'submit', check_upload_categories);}
}
function check_upload_categories(event) { var description=document.getElementById('wpUploadDescription').value; if((description.indexOf('[[Category')==-1) && (description.indexOf('[[category')==-1)) { window.alert('Please add some categories to the "Summary" field. Our image categorisation policy can be found at http://strategywiki.org/wiki/StrategyWiki:Images.'); event.preventDefault(); event.returnValue=false; return false;}
}
function selectControlSet()
{ var spans = document.getElementsByTagName("span"); for (var i=0; ControlOpt = spans[i]; i++ ) { if (hasClass(ControlOpt, "controlOpt")) { if (hasClass(ControlOpt, 'control' + document.getElementById('control_selector_select').value)) ControlOpt.style.display = 'inline'
else ControlOpt.style.display = 'none'
}
}
}
function createControlSelector()
{ var controlDiv = document.getElementById("control_selector_inner"); if (!controlDiv) return false; var ControlSelector = document.createElement("select"); ControlSelector.className = 'ControlSet'; ControlSelector.id = 'control_selector_select'; addHandler(ControlSelector, 'change', selectControlSet); var sysText = controlDiv.textContent; if(!sysText) sysText = controlDiv.innerText; if(!sysText) return false; sysTexts = sysText.split(','); for (var i=0; i < Math.min(5, sysTexts.length); i++){ ControlSelector.options[i] = new Option(sysTexts[i].replace(/^\s+|\s+$/g, ''), i);}
if(controlDiv.textContent) controlDiv.textContent = ''; else if(controlDiv.innerText) controlDiv.innerText = ''; controlDiv.appendChild(ControlSelector); controlDiv.parentNode.style.display = 'block';}
addOnloadHook( createControlSelector ); function displayCalendar() { var cal = document.getElementById('google-calendar'); if(!cal) return; var calframe = document.createElement('iframe'); calframe.src = 'http://www.google.com/calendar/embed?src=qk4t1di1u3song0vqo39o0ribo%40group.calendar.google.com'; calframe.style.border = '0'; calframe.width = '800'; calframe.height = '600'; calframe.frameborder = '0'; calframe.scrolling = 'no'; cal.appendChild(calframe);}
addOnloadHook(displayCalendar); function addAlexaGraphs() { var wrapper = document.getElementById('alexa-graph'); if(!wrapper) return; var br = document.createElement('br'); br.style.clear = "both"; var img1 = document.createElement('img'); var img2 = document.createElement('img'); var img3 = document.createElement('img'); var time = wrapper.innerHTML; wrapper.innerHTML = ''; img1.src = "http://traffic.alexa.com/graph?c=1&f=555555&u=strategywiki.org&u=&u=&u=&u=&r="+time+"&y=r&z=3&h=300&w=610"
img2.src = "http://traffic.alexa.com/graph?c=1&f=555555&u=strategywiki.org&u=&u=&u=&u=&r="+time+"&y=n&z=3&h=300&w=610"
img3.src = "http://traffic.alexa.com/graph?c=1&f=555555&u=strategywiki.org&u=&u=&u=&u=&r="+time+"&y=p&z=3&h=300&w=610"
wrapper.appendChild(img1); wrapper.appendChild(br); wrapper.appendChild(img2); wrapper.appendChild(br); wrapper.appendChild(img3);}
addOnloadHook(addAlexaGraphs); function alphabet_links() { if (document.getElementById('alphabetTOC_table')) { var alphaTable = document.getElementById('alphabetTOC_table').getElementsByTagName('td'); var cellLetter; for (i=0; i < alphaTable.length; i++) { cellLetter = alphaTable[i].childNodes[0].innerHTML; if (!document.getElementById(cellLetter)) { alphaTable[i].innerHTML = cellLetter;}
}
}
}
addOnloadHook(alphabet_links);

/* MediaWiki:Dolphin.js */
