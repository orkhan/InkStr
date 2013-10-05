<?php namespace Ink\InkStr;

use Illuminate\Support\Str;

class InkStr extends Str {

    /**
     * Generate a URL friendly "slug" from a given string.
     *
     * <code>
     *		// Returns "türkçe-yazılım"
     *		$slug = Str::slug('Türkçe yazılım!');
     *
     *		// Returns "türkçe_yazılım"
     *		$slug = Str::slug('Türkçe yazılım!', '_');
     * </code>
     *
     * Skips ASCII
     *
     * @param  string  $title
     * @param  string  $separator
     * @return string
     */
    public static function slug($title, $separator = '-')
    {
        // Remove all characters that are not the separator, letters, numbers, or whitespace.
        $title = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', static::lower($title));

        // Replace all separator characters and whitespace by a single separator
        $title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title);

        return trim($title, $separator);
    }

}