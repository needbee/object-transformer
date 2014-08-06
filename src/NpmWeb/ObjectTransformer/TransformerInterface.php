<?php namespace NpmWeb\MediaClient\Transformer;

interface TransformerInterface {

	/**
	 * Transforms one object.
	 */
	public function transform( $object );

	/**
	 * Transforms an array of objects.
	 */
	public function transformArray( $objectArray );

}
