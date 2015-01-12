<?php return function ($in, $debugopt = 1) {
    $cx = array(
        'flags' => array(
            'jstrue' => false,
            'jsobj' => false,
            'spvar' => false,
            'prop' => false,
            'method' => false,
            'mustlok' => true,
            'mustsec' => true,
            'echo' => false,
            'debug' => $debugopt,
        ),
        'helpers' => array(),
        'blockhelpers' => array(),
        'hbhelpers' => array(),
        'partials' => array(),
        'scopes' => array($in),
        'sp_vars' => array('root' => $in),
'funcs' => array(
    'v' => function ($cx, $base, $path) {
        $count = count($cx['scopes']);
        while ($base) {
            $v = $base;
            foreach ($path as $name) {
                if (is_array($v) && isset($v[$name])) {
                    $v = $v[$name];
                    continue;
                }
                if (is_object($v)) {
                    if ($cx['flags']['prop'] && isset($v->$name)) {
                        $v = $v->$name;
                        continue;
                    }
                    if ($cx['flags']['method'] && is_callable(array($v, $name))) {
                        $v = $v->$name();
                        continue;
                    }
                }
                if ($cx['flags']['mustlok']) {
                    unset($v);
                    break;
                }
                return null;
            }
            if (isset($v)) {
                return $v;
            }
            $count--;
            if ($count >= 0) {
                $base = $cx['scopes'][$count];
            } else {
                return null;
            }
        }
    },
)

    );
    return ''.$cx['funcs']['v']($cx, $in, array('headelement')).'

<nav class="navbar">
	<div class="navbar-header">
		<a class="navbar-brand" href="/">mediawiki.ui</a>
	</div>

	<div class="collapse navbar-collapse" id="topmenu">
		<form class="navbar-form navbar-left" role="search">
		<div class="form-group">
				<input type="text" class="form-control search-input" placeholder="Search">
			</div>
		</form>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Desktop</a></li>
			<li><a href="#">Mobile</a></li>
		</ul>
	</div>
</nav>

<div class="container">
<h1 class="firstHeading">'.htmlentities((string)$cx['funcs']['v']($cx, $in, array('title')), ENT_QUOTES, 'UTF-8').'</h1>
'.$cx['funcs']['v']($cx, $in, array('bodytext')).'
</div>
</body>
'.$cx['funcs']['v']($cx, $in, array('debughtml')).'
'.$cx['funcs']['v']($cx, $in, array('bottomscripts')).'
'.$cx['funcs']['v']($cx, $in, array('reporttime')).'
</html>
';
}
?>