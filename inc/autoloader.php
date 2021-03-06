<?php
/**
 * PSR-4 autoloader.
 *
 * @param string $class The fully-qualified class name.
 */
spl_autoload_register( function ( $class ) {

    // project-specific namespace prefix
    $prefix = 'Inc\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/';

    // does the class use the namespace prefix?
    $len = strlen( $prefix );
    if ( strncmp( $prefix, $class, $len ) !== 0 ) {
        return;
    }

    // get the relative class name
    $relative_class = substr( $class, $len );
    $relative_class = strtolower( str_replace( 'AS_', '', $relative_class ) );
    $relative_class = str_replace( '_', '-', $relative_class );

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . 'class-' . $relative_class . '.php';

    // if the file exists, require it
    if ( file_exists( $file ) ) {
        require $file;
    }
} );