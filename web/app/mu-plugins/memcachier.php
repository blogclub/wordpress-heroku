<?php
$key   = 'dummy';
$value = '100';

$dummy_value = wp_cache_get( $key );

if ( $value !== $dummy_value ) {
	echo "The dummy value is not in cache. Adding the value now.";
	wp_cache_set( $key, $value );
} else {
	echo "Value is " . $dummy_value . ". The WordPress Memcached Backend is working!";
}