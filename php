
//SHORTEN get_locale(); en_us to en
$fmt = numfmt_create( get_locale(),  NumberFormatter::DECIMAL);
				$lang = numfmt_get_locale( $fmt, Locale::ACTUAL_LOCALE );
