<?php namespace NpmWeb\MediaClient\Transformer;

abstract class AbstractTransformer
	implements TransformerInterface
{

	/**
	 * Calls reorganize() on each element in the array
	 */
	public function transformArray( $objectArray ) {
		return array_map( function($object) {
			return $this->transform($object);
		}, $objectArray );
	}

}
