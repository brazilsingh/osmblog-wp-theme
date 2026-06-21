/**
 * Dark / light mode toggle for the OSM Blog theme.
 *
 * The early inline script in header.php has already set
 * <html data-theme="dark|light|auto"> to avoid a flash. This script wires up
 * the header button: it flips the effective theme on click, remembers the
 * choice in localStorage, and keeps the button's icon + label in sync.
 */
( function () {
	var root = document.documentElement;
	var btn  = document.getElementById( 'osm-theme-toggle' );
	if ( ! btn ) {
		return;
	}

	var mql = window.matchMedia ? window.matchMedia( '(prefers-color-scheme: dark)' ) : null;

	function effective() {
		var t = root.getAttribute( 'data-theme' );
		if ( t === 'dark' || t === 'light' ) {
			return t;
		}
		return ( mql && mql.matches ) ? 'dark' : 'light';
	}

	function paintButton( theme ) {
		var isDark = theme === 'dark';
		btn.classList.toggle( 'is-dark', isDark );
		btn.setAttribute( 'aria-pressed', String( isDark ) );
		btn.setAttribute( 'aria-label', isDark ? 'Switch to light mode' : 'Switch to dark mode' );
		btn.setAttribute( 'title', isDark ? 'Switch to light mode' : 'Switch to dark mode' );
	}

	// Reflect the current state without pinning "auto" (so it keeps following
	// the system until the reader makes a choice).
	paintButton( effective() );

	if ( mql && mql.addEventListener ) {
		mql.addEventListener( 'change', function () {
			if ( root.getAttribute( 'data-theme' ) !== 'dark' && root.getAttribute( 'data-theme' ) !== 'light' ) {
				paintButton( effective() );
			}
		} );
	}

	btn.addEventListener( 'click', function () {
		var next = effective() === 'dark' ? 'light' : 'dark';
		try {
			localStorage.setItem( 'osm-theme', next );
		} catch ( e ) {}
		root.setAttribute( 'data-theme', next );
		paintButton( next );
	} );
} )();
