<?php
/**
 * Internationalization file for Semantic WebBrowser
 * @author Anna Kantorovitch, Benedikt Kämpgen and Andreas Adler
 * @ingroup Language
 * @ingroup SWBLanguage
 */

$messages = array();

/** English
 *
 */
$messages['en'] = array(
	'browsesw'                 => 'Browse Wiki & Semantic Web',
	'swb_desc'                   => 'Adds a special page [[Special:BrowseSW|Browse Wiki & Semantic Web]]',
	'swb_browse_article'         => 'Enter the name of the page to start semantic browsing from.',
	'swb_browse_go'              => 'Go',
	'swb_browse_show_incoming'   => 'show incoming properties that link here',
	'swb_browse_hide_incoming'   => 'hide incoming properties that link here',
	'swb_browse_no_outgoing'     => 'This page has no properties.',
	'swb_browse_no_incoming'     => 'No properties link to this page.',
	'swb_inverse_label_property' => 'Inverse property label',
	'swb_inverse_label_default'  => '$1 of',
	'swb_browse_more'            => '...',
	'swb_browse_error'			 => 'Semantic data could not be loaded with Semantic Web Browser due to an error:',
);

/** Message documentation (Message documentation)
 * @author Benedikt Kämpgen
 * @author SPQRobin
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'browsesw' => '{{doc-special|BrowseSW}}',
	'swb_desc' => '{{desc|name=Semantic Web Browser|url=http://www.mediawiki.org/wiki/Extension:SemanticWebBrowser}}',
	'swb_browse_article' => 'Text above "go" window',
	'swb_browse_go' => 'Title of button "go".
{{Identical|Go}}',
	'swb_browse_show_incoming' => 'Title of properties',
	'swb_browse_hide_incoming' => 'Title of properties',
	'swb_browse_no_outgoing' => 'Used in the table in [[Special:BrowseSW]] if there are no results.

See also:
* {{msg-mw|Swb browse no incoming}}',
	'swb_browse_no_incoming' => 'Used in the table in [[Special:BrowseSW]] if there are no results.

See also:
* {{msg-mw|Swb browse no outgoing}}',
	'swb_inverse_label_property' => 'Name of a special property',
	'swb_inverse_label_default' => 'Inverse label default, $1 is a place marker',
	'swb_browse_more' => 'Browse more details',
	'swb_browse_error' => 'Unused at this time.',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'browsesw' => 'Navegar pela wiki y la web semántica',
	'swb_desc' => 'Añade una páxina especial [[Special:BrowseSW|Navegar pela Wiki y la Web semántica]]',
	'swb_browse_article' => "Escriba'l nome de la páxina dende la qu'empezar la navegación semántica.",
	'swb_browse_go' => 'Dir',
	'swb_browse_show_incoming' => "ver les propiedaes entrantes qu'enllacen equí",
	'swb_browse_hide_incoming' => "tapecer les propiedaes entrantes qu'enllacen equí",
	'swb_browse_no_outgoing' => 'Esta páxina nun tien propiedaes.',
	'swb_browse_no_incoming' => "Nun hai propiedaes qu'enllacen a esta páxina.",
	'swb_inverse_label_property' => 'Etiqueta de propiedá inversa',
	'swb_inverse_label_default' => '$1 de',
	'swb_browse_error' => 'Nun pudieron cargase los datos semánticos col Navegador Web Semánticu por un error:',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'swb_browse_go' => 'Mont',
	'swb_inverse_label_default' => '$1 eus',
);

/** Catalan (català)
 * @author Pitort
 */
$messages['ca'] = array(
	'swb_inverse_label_default' => '$1 de',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'browsesw' => 'Das Wiki sowie das semantische Web browsen',
	'swb_desc' => 'Ergänzt eine [[Special:BrowseSW|Spezialseite]] zum Browsen des Wikis sowie des semantischen Webs',
	'swb_browse_article' => 'Bitte den Namen einer Seite angeben, um mit dem Browsen zu beginnen.',
	'swb_browse_go' => 'Los',
	'swb_browse_show_incoming' => 'zeige Attribute die hierhin verlinken',
	'swb_browse_hide_incoming' => 'verstecke Attribute die hierhin verlinken',
	'swb_browse_no_outgoing' => 'Diese Seite enthält keine Attribute.',
	'swb_browse_no_incoming' => 'Keine Attribute verlinken auf diese Seite.',
	'swb_inverse_label_property' => 'Bezeichnung des inversen Attributs',
	'swb_inverse_label_default' => '$1 von',
	'swb_browse_error' => 'Semantische Informationen konnten aufgrund eines Fehlers des Semantic Web Browser nicht geladen werden:',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Fitoschido
 */
$messages['es'] = array(
	'browsesw' => 'Explorar el wiki y la web semántica',
	'swb_desc' => 'Añade una página especial [[Special:BrowseSW|Explorar el Wiki y la Web semántica]]', # Fuzzy
	'swb_browse_article' => 'Escribe el nombre de la página para empezar la navegación semántica.',
	'swb_browse_go' => 'Ir',
	'swb_browse_show_incoming' => 'Mostrar las propiedades entrantes que enlazan aquí',
	'swb_browse_hide_incoming' => 'Ocultar las propiedades entrantes que enlazan aquí',
	'swb_browse_no_outgoing' => 'Esta página no tiene propiedades.',
	'swb_browse_no_incoming' => 'No hay propiedades que enlacen a esta página.',
	'swb_inverse_label_property' => 'Etiqueta de propiedad inversa',
	'swb_inverse_label_default' => '$1 de',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'swb_browse_go' => 'برو',
);

/** Finnish (suomi)
 * @author Silvonen
 */
$messages['fi'] = array(
	'swb_browse_no_outgoing' => 'Tällä sivulla ei ole ominaisuuksia.',
);

/** French (français)
 * @author Gomoko
 * @author Jean-Frédéric
 */
$messages['fr'] = array(
	'browsesw' => 'Naviguer dans le wiki & le web sémantique',
	'swb_desc' => 'Ajouter une page spéciale [[Special:BrowseSW|Naviguer dans le wiki & le web sémantique]]',
	'swb_browse_article' => 'Entrez le nom de la page à partir de laquelle commencer la navigation sémantique.',
	'swb_browse_go' => 'Valider',
	'swb_browse_show_incoming' => "afficher les propriétés d'entrée qui pointent ici",
	'swb_browse_hide_incoming' => "cacher les propriétés d'entrée qui pointent ici",
	'swb_browse_no_outgoing' => 'Cette page n’a aucune propriété.',
	'swb_browse_no_incoming' => 'Aucune propriété ne pointe vers cette page.',
	'swb_inverse_label_property' => 'Label de la propriété inverse',
	'swb_inverse_label_default' => '$1 de',
	'swb_browse_error' => 'Les données sémantiques n’ont pu être chargées avec le Navigateur Web Sémantique en raison d’une erreur :',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'swb_browse_go' => 'Validar',
	'swb_inverse_label_default' => '$1 de',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'swb_browse_go' => 'Gabh',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'browsesw' => 'Explorar o wiki e a web semántica',
	'swb_desc' => 'Engade unha páxina especial denominada [[Special:BrowseSW|Explorar o wiki e a web semántica]]',
	'swb_browse_article' => 'Insira o nome da páxina para comezar a navegación semántica.',
	'swb_browse_go' => 'Ir',
	'swb_browse_show_incoming' => 'mostrar as propiedades entrantes que ligan cara a aquí',
	'swb_browse_hide_incoming' => 'agochar as propiedades entrantes que ligan cara a aquí',
	'swb_browse_no_outgoing' => 'Esta páxina non ten propiedades.',
	'swb_browse_no_incoming' => 'Ningunha propiedade liga con esta páxina.',
	'swb_inverse_label_property' => 'Etiqueta da propiedade inversa',
	'swb_inverse_label_default' => '$1 de',
	'swb_browse_error' => 'Os datos semánticos non se puideron cargar co navegador web semántico debido a un erro:',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'browsesw' => 'Wiki a semantisku syć přepytać',
	'swb_desc' => 'Přidawa specialnu stronu [[Special:BrowseSW|Wiki a semantisku syć přepytać]]',
	'swb_browse_article' => 'Zapodaj mjeno strony, wot kotrejež ma so semantiske přehladowanje započeć.',
	'swb_browse_go' => 'Pytać',
	'swb_browse_show_incoming' => 'dochadźace kajkosće pokazać, kotrež sem wotkazuja',
	'swb_browse_hide_incoming' => 'dochadźace kajkosće schować, kotrež sem wotkazuja',
	'swb_browse_no_outgoing' => 'Tuta strona nima kajkosće.',
	'swb_browse_no_incoming' => 'Žane kajkosće k tutej stronje njewotkazuja.',
	'swb_inverse_label_property' => 'Pomjenowanje nawopačneje kajkosće',
	'swb_inverse_label_default' => '$1 z',
	'swb_browse_error' => 'Semantiske daty njedachu so zmylka dla ze semantiskim webwobhladowakom začitać:',
);

/** Hungarian (magyar)
 * @author TK-999
 */
$messages['hu'] = array(
	'browsesw' => 'A wiki és a szemantikus Web böngészése',
	'swb_desc' => 'Létrehozza egy, [[Special:BrowseSW|a wiki és a szemantikus Web böngészését]] szolgáló speciális lapot.', # Fuzzy
	'swb_browse_article' => 'Írd be a szemantikus böngészés kezdőpontjául szolgáló lap címét.',
	'swb_browse_go' => 'Mehet',
	'swb_browse_show_incoming' => 'Ide hivatkozó bejövő tulajdonságok megjelenítése',
	'swb_browse_hide_incoming' => 'Ide hivatkozó bejövő tulajdonságok elrejtése',
	'swb_browse_no_outgoing' => 'Ehhez a laphoz nem tartoznak tulajdonságok.',
	'swb_browse_no_incoming' => 'Egy tulajdonság sem hivatkozik erre a lapra.',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'browsesw' => 'Navigar in wiki & web semantic',
	'swb_desc' => 'Adde un pagina special [[Special:BrowseSW|Navigar in wiki & web semantic]]', # Fuzzy
	'swb_browse_article' => 'Entra le nomine del pagina ab le qual tu vole initiar le exploration semantic.',
	'swb_browse_go' => 'Va',
	'swb_browse_show_incoming' => 'monstrar le proprietates de entrata con ligamines verso hic',
	'swb_browse_hide_incoming' => 'celar le proprietates de entrata con ligamines verso hic',
	'swb_browse_no_outgoing' => 'Iste pagina non ha proprietates.',
	'swb_browse_no_incoming' => 'Nulle proprietate ha un ligamine a iste pagina.',
	'swb_inverse_label_property' => 'Etiquetta de proprietate inverse',
	'swb_inverse_label_default' => '$1 de',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'browsesw' => 'Browse Wiki & Semantic Web',
	'swb_desc' => 'Aggiunge una pagina speciale [[Special:BrowseSW|Browse Wiki & Semantic Web]]',
	'swb_browse_article' => "Inserire il nome della pagina da cui iniziare l'esplorazione semantica.",
	'swb_browse_go' => 'Vai',
	'swb_browse_show_incoming' => 'mostra le proprietà in arrivo che collegano qui',
	'swb_browse_hide_incoming' => 'nascondi le proprietà in arrivo che collegano qui',
	'swb_browse_no_outgoing' => 'Questa pagina non ha proprietà.',
	'swb_browse_no_incoming' => 'Nessuna proprietà linka a questa pagina.',
	'swb_inverse_label_property' => 'Etichetta della proprietà inversa',
	'swb_inverse_label_default' => '$1 di',
	'swb_browse_error' => 'I dati semantici non possono essere caricati con il Semantic Web Browser a causa di un errore:',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'browsesw' => 'ウィキとセマンティック Web をブラウズ',
	'swb_desc' => '特別ページ[[Special:BrowseSW|ウィキとセマンティック Web をブラウズ]]を追加する',
	'swb_browse_article' => 'セマンティックブラウズを開始するページの名前を入力してください。',
	'swb_browse_go' => '実行',
	'swb_browse_show_incoming' => 'このページにリンクしているプロパティを表示',
	'swb_browse_hide_incoming' => 'このページにリンクしているプロパティを隠す',
	'swb_browse_no_outgoing' => 'このページにはプロパティはありません。',
	'swb_browse_no_incoming' => 'このページは、他のプロパティからリンクされていません。',
	'swb_inverse_label_property' => 'プロパティのラベルを反転',
	'swb_inverse_label_default' => '$1である',
	'swb_browse_error' => 'エラーが発生したため、セマンティックWebブラウザーで意味的データを読み込めませんでした:',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'swb_browse_go' => 'მიდი',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'browsesw' => '위키와 시맨틱 웹 찾아보기',
	'swb_desc' => '[[Special:BrowseSW|위키와 시맨틱 웹 찾아보기]] 특수 문서를 추가합니다', # Fuzzy
	'swb_browse_article' => '시맨틱 찾아보기를 시작하려면 문서의 이름을 입력하세요.',
	'swb_browse_go' => '가기',
	'swb_browse_show_incoming' => '여기에 링크한 속성 보기',
	'swb_browse_hide_incoming' => '여기에 링크한 속성 숨기기',
	'swb_browse_no_outgoing' => '이 문서에는 속성이 없습니다.',
	'swb_browse_no_incoming' => '이 문서에 링크한 속성이 없습니다.',
	'swb_inverse_label_property' => '역 속성 레이블',
	'swb_inverse_label_default' => '$1입니다',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'browsesw' => 'Em Wiki un em semantesche Web bläddere',
	'swb_desc' => 'Deihd en Extrasigg en et Wiki: [[Special:BrowseSW|Blädder em Wiki un em semantesche Web]].', # Fuzzy
	'swb_browse_article' => 'Bes esu joot, un jif dä Tittel vun dä Sigg aan, wo De met däm semantesch Bläddere aanfange wells.',
	'swb_browse_go' => 'Lohß Jonn!',
	'swb_browse_show_incoming' => 'zeisch de Eijeschaffte, di noh heh lengke donn',
	'swb_browse_hide_incoming' => 'zeisch de Eijeschaffte nit aan, di noh heh lengke donn',
	'swb_browse_no_outgoing' => 'Di Sigg hät kein Eijeschaffte.',
	'swb_browse_no_incoming' => 'Mer han kein Eijeschaffte em Wiki, di ene Lengk noh heh dä Sigg han.',
	'swb_inverse_label_property' => 'Dä Name för di Eijeschaff, wann dä ier Reschtung ömjedrieht weed',
	'swb_inverse_label_default' => '$1 vun',
	'swb_browse_more' => '&nbsp;&hellip;',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'browsesw' => "Duerch d'Wiki an de semantesche Spaweck browsen",
	'swb_desc' => "Setzt eng Spezialsäit [[Special:BrowseSW|Duerch d'Wiki an de semantesche Spaweck browsen]] derbäi",
	'swb_browse_go' => 'Lass',
	'swb_browse_no_outgoing' => 'Dës Säit huet keng Eegeschaften.',
	'swb_browse_no_incoming' => 'Et linke keng Eegeschaften op dës Säit.',
	'swb_inverse_label_default' => '$1 vu(n)',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'browsesw' => 'Прелистување на викито и Семантичката пајажина',
	'swb_desc' => 'Додава специјална страница [[Special:BrowseSW|Прелистување на викито и Семантичката пајажина]]',
	'swb_browse_article' => 'Внесете го името на страницата од која би почнале со семантичкото прелистување.',
	'swb_browse_go' => 'Оди',
	'swb_browse_show_incoming' => 'прикажи дојдовни својства што водат овде',
	'swb_browse_hide_incoming' => 'скриј дојдовни својства што водат овде',
	'swb_browse_no_outgoing' => 'Оваа страница нема својства.',
	'swb_browse_no_incoming' => 'До оваа страница не водат никакви својства.',
	'swb_inverse_label_property' => 'Обратен наслов на својството',
	'swb_inverse_label_default' => '$1 од',
	'swb_browse_more' => '...',
	'swb_browse_error' => 'Не можев да ги вчитам семантичките податоци во Семантичкиот прелистувач поради грешка:',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'browsesw' => 'Layari Wiki & Sesawang Semantik',
	'swb_desc' => 'Menambahkan laman khas [[Special:BrowseSW|Layari Wiki & Sesawang Semantik]]', # Fuzzy
	'swb_browse_article' => 'Masukkan nama halaman untuk memulakan pelayaran semantik.',
	'swb_browse_go' => 'Pergi',
	'swb_browse_show_incoming' => 'tunjukkan sifat diterima yang berpaut ke sini',
	'swb_browse_hide_incoming' => 'sorokkan sifat diterima yang berpaut ke sini',
	'swb_browse_no_outgoing' => 'Laman ini tiada sifat.',
	'swb_browse_no_incoming' => 'Tiada sifat yang berpaut ke halaman ini.',
	'swb_inverse_label_property' => 'Label sifat songsang',
	'swb_inverse_label_default' => '$1 daripada',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Event
 */
$messages['nb'] = array(
	'browsesw' => 'Nettlesing av Wiki & Semantisk web',
	'swb_desc' => 'Legger til en spesialside [[Special:BrowseSW|Nettlesing av Wiki & Semantisk Web]]', # Fuzzy
	'swb_browse_article' => 'Legg inn navnet på siden som semantisk nettlesing skal starte fra.',
	'swb_browse_go' => 'Kjør',
	'swb_browse_show_incoming' => 'vis innkommende egenskaper som lenker hit',
	'swb_browse_hide_incoming' => 'skjul innkommende egenskaper som lenker hit',
	'swb_browse_no_outgoing' => 'Denne siden har ingen egenskaper',
	'swb_browse_no_incoming' => 'Ingen egenskaper lenker til denne siden.',
	'swb_inverse_label_property' => 'Etikett for invers egenskap',
	'swb_inverse_label_default' => '$1 av',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Saruman
 * @author Siebrand
 */
$messages['nl'] = array(
	'browsesw' => 'Blader door Wiki en Semantisch Web',
	'swb_desc' => 'Voegt een speciale pagina [[Special:BrowseSW|wiki en semantisch web doorbladeren]] toe',
	'swb_browse_article' => 'Voer de naam in van de pagina vanwaar u met semantisch bladeren wilt beginnen.',
	'swb_browse_go' => 'OK',
	'swb_browse_show_incoming' => 'eigenschappen die hierheen verwijzen weergeven',
	'swb_browse_hide_incoming' => 'eigenschappen die hierheen verwijzen verbergen',
	'swb_browse_no_outgoing' => 'Deze pagina heeft geen eigenschappen.',
	'swb_browse_no_incoming' => 'Er verwijzen geen eigenschappen naar deze pagina.',
	'swb_inverse_label_property' => 'Tegenovergesteld eigenschapslabel',
	'swb_inverse_label_default' => '$1 van',
	'swb_browse_error' => 'Semantische gegevens konden niet gelaten worden met Semantic Web Browser vanwege een fout:',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'browsesw' => 'Navigar dins lo wiki & lo web semantic',
	'swb_desc' => 'Apondre una pagina especiala [[Special:BrowseSW|Navigar dins lo wiki & lo web semantic]]', # Fuzzy
	'swb_browse_article' => 'Picatz lo nom de la pagina a partir de la quala volètz començar la navigacion.',
	'swb_browse_go' => 'Validar',
	'swb_browse_show_incoming' => "afichar las proprietats d'entradas que puntan aicí",
	'swb_browse_hide_incoming' => "amagar las proprietats d'entradas que puntan aicí",
	'swb_browse_no_outgoing' => 'Aquesta pagina a pas cap de proprietat.',
	'swb_browse_no_incoming' => 'Cap de proprietat punta pas cap a aquesta pagina.',
	'swb_inverse_label_property' => 'Labèl de la proprietat invèrsa',
	'swb_inverse_label_default' => '$1 de',
);

/** Polish (polski)
 * @author BeginaFelicysym
 */
$messages['pl'] = array(
	'browsesw' => 'Przeglądaj wiki & sieć semantyczną',
	'swb_desc' => 'Dodaje specjalną stronę [[Special:BrowseSW|Przeglądaj wiki & sieć semantyczną]]', # Fuzzy
	'swb_browse_article' => 'Wpisz nazwę artykułu, od którego chcesz rozpocząć przeglądanie semantyczne.',
	'swb_browse_go' => 'Przejdź',
	'swb_browse_show_incoming' => 'pokaż właściwości przychodzące łączące tutaj',
	'swb_browse_hide_incoming' => 'ukryj właściwości przychodzące łączące tutaj',
	'swb_browse_no_outgoing' => 'Ta strona nie ma właściwości.',
	'swb_browse_no_incoming' => 'Żadne własności nie linkują do tej strony.',
	'swb_inverse_label_property' => 'Etykieta odwrotnej własności',
	'swb_inverse_label_default' => '$1 z',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'browsesw' => 'ويکي او سېمانټيک جال سپړل',
	'swb_browse_go' => 'ورځه',
);

/** Portuguese (português)
 * @author SandroHc
 */
$messages['pt'] = array(
	'swb_browse_go' => 'Ir',
	'swb_inverse_label_default' => '$1 de',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas
 * @author Luckas Blade
 */
$messages['pt-br'] = array(
	'swb_browse_go' => 'Ir',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'browsesw' => 'Sfogghie Uicchi e Web Semandiche',
	'swb_desc' => "Aggiunge 'na pàgena speciale [[Special:BrowseSW|Sfogghie Uicchi & Web Semandiche]]", # Fuzzy
	'swb_browse_article' => "Sckaffe 'u nome d'a pàgene pe accumenzà 'u sfogliamende semandiche.",
	'swb_browse_go' => 'Véje',
	'swb_browse_show_incoming' => "fà vedè le probbietà in entrate ca 'u collegane aqquà",
	'swb_browse_hide_incoming' => "scunne le probbietà in entrate ca 'u collegane aqquà",
	'swb_browse_no_outgoing' => 'Sta pàgene non ge tène probbietà.',
	'swb_browse_no_incoming' => 'Nisciuna probbietà jè collegate a sta pàgene.',
	'swb_inverse_label_property' => "probbietà de l'etichette a smerse",
	'swb_inverse_label_default' => '$1 de',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'browsesw' => 'Просмотр Вики и Семантической сети',
	'swb_desc' => 'Дополняет спецстраницу [[Special:BrowseSW|Просмотр Вики и Семантической сети]]',
	'swb_browse_article' => 'Введите имя страницы, с которой надо начать семантический просмотр.',
	'swb_browse_go' => 'Перейти',
	'swb_browse_show_incoming' => 'показать входящие свойства, ссылающиеся сюда',
	'swb_browse_hide_incoming' => 'скрыть входящие свойства, ссылающиеся сюда',
	'swb_browse_no_outgoing' => 'У этой страницы нет свойств.',
	'swb_browse_no_incoming' => 'Нет свойств, ссылающихся на эту страницу.',
	'swb_inverse_label_property' => 'Инвертировать метку свойства',
	'swb_inverse_label_default' => '$1 из',
	'swb_browse_error' => 'Семантические данные не могут быть загружены с помощью семантического веб-браузера из-за ошибки:',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'swb_browse_go' => 'යන්න',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'swb_browse_more' => '…',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 */
$messages['sr-el'] = array(
	'swb_browse_more' => '…',
);

/** Swedish (svenska)
 * @author Jopparn
 */
$messages['sv'] = array(
	'swb_browse_go' => 'Kör',
	'swb_browse_show_incoming' => 'visa inkommande egenskaper som länkar hit',
	'swb_browse_hide_incoming' => 'dölj inkomna egenskaper som länkar hit',
	'swb_browse_no_outgoing' => 'Denna sida har inga egenskaper.',
	'swb_browse_no_incoming' => 'Inga egenskaper länkar till den här sidan.',
	'swb_inverse_label_property' => 'Benämning på inverterad egenskap',
	'swb_inverse_label_default' => '$1 av',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 */
$messages['ta'] = array(
	'swb_browse_go' => 'செல்',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'swb_browse_go' => 'వెళ్ళు',
	'swb_browse_no_outgoing' => 'ఈ పేజీలో లక్షణాలేమీ లేవు.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'browsesw' => 'Pantingin-tingin ng Wiki at Semantikong Sangkasaputan',
	'swb_desc' => 'Nagdaragdag ng isang natatanging pahinang [[Special:BrowseSW|Pantingin-tingin ng Wiki at Semantikong Sangkasaputan]]', # Fuzzy
	'swb_browse_article' => 'Ipasok/ ang pangalan ng pahinang pagsisimulan ng semantikong pagtingin-tingin.',
	'swb_browse_go' => 'Gawin',
	'swb_browse_show_incoming' => 'ipakita ang parating na mga katangiang pag-aari na nakakawing dito',
	'swb_browse_hide_incoming' => 'itago ang parating na mga katangiang pag-aari na nakakawing dito',
	'swb_browse_no_outgoing' => 'Walang mga pag-aari ang pahinang ito.',
	'swb_browse_no_incoming' => 'Walang mga pag-aaring nakakawing na patungo sa pahinang ito.',
	'swb_inverse_label_property' => 'Ibinaligtad na tatak ng pag-aari',
	'swb_inverse_label_default' => '$1 ng',
	'swb_browse_more' => '...',
);

/** толышә зывон (толышә зывон)
 * @author Erdemaslancan
 */
$messages['tly'] = array(
	'swb_browse_go' => 'Давард',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 */
$messages['uk'] = array(
	'browsesw' => 'Перегляд вікі в семантичного вебу',
	'swb_desc' => 'Додає спеціальну сторінку  [[Special:BrowseSW|Перегляд вікі і семантичного вебу]]',
	'swb_browse_article' => "Введіть ім'я сторінки, з якого почати семантичний веб-перегляд.",
	'swb_browse_go' => 'Перейти',
	'swb_browse_show_incoming' => 'показувати вхідні властивості, що посилаються сюди',
	'swb_browse_hide_incoming' => 'приховати вхідні властивості, що посилаються сюди',
	'swb_browse_no_outgoing' => 'На цій сторінці не має властивостей.',
	'swb_browse_no_incoming' => 'Немає властивостей, які посилаються на цю сторінку.',
	'swb_inverse_label_property' => 'Мітка оберненої властивості',
	'swb_inverse_label_default' => '$1 з',
	'swb_browse_error' => 'Семантичні дані не можуть бути завантажені з використанням семантичного веб-переглядача через помилку:',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'swb_browse_go' => 'جانا',
);

/** Yiddish (ייִדיש)
 * @author පසිඳු කාවින්ද
 */
$messages['yi'] = array(
	'swb_browse_go' => 'גיין',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Linforest
 * @author Liuxinyu970226
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'browsesw' => '浏览维基与语义网',
	'swb_desc' => '添加特殊页面[[Special:BrowseSW|浏览维基与语义网]]',
	'swb_browse_article' => '输入语义浏览的起始页面名称。',
	'swb_browse_go' => '转到',
	'swb_browse_show_incoming' => '显示链接至这里的进入属性',
	'swb_browse_hide_incoming' => '隐藏链接至这里的进入属性',
	'swb_browse_no_outgoing' => '此页面没有属性。',
	'swb_browse_no_incoming' => '没有指向此页面的属性链接。',
	'swb_inverse_label_property' => '逆向属性标签',
	'swb_inverse_label_default' => '的$1',
	'swb_browse_error' => '由于一个错误语义数据无法与语义web浏览器加载：',
);

/** Traditional Chinese (中文（繁體）‎)
 */
$messages['zh-hant'] = array(
	'browsesw' => '瀏覽維基與語義網',
	'swb_desc' => '添加特殊頁面[[Special:BrowseSW|瀏覽維基與語義網]]', # Fuzzy
	'swb_browse_article' => '輸入語義瀏覽的起始頁面名稱。',
	'swb_browse_go' => '轉到',
	'swb_browse_show_incoming' => '顯示鏈接到此處的鏈入屬性',
	'swb_browse_hide_incoming' => '隱藏鏈接到此處的鏈入屬性',
	'swb_browse_no_outgoing' => '此頁面沒有屬性。',
	'swb_browse_no_incoming' => '沒有指向此頁面的屬性鏈接。',
	'swb_inverse_label_property' => '逆向屬性標籤',
	'swb_inverse_label_default' => '的$1',
);
