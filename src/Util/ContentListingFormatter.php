<?php

namespace League\Flysystem\Util;

use League\Flysystem\Util;

/**
 * @internal
 */
class ContentListingFormatter
{
    /**
     * @var string
     */
    private $directory;

    /**
     * @var bool
     */
    private $recursive;

    /**
     * @var bool
     */
    private $caseSensitive;

    /**
     * @param string $directory
     * @param bool   $recursive
     */
    public function __construct($directory, $recursive, $caseSensitive = true)
    {
        $this->directory = rtrim($directory, '/');
        $this->recursive = $recursive;
        $this->caseSensitive = $caseSensitive;
    }

    /**
     * Format contents listing.
     *
     * @param array $listing
     *
     * @return array
     */
    public function formatListing(array $listing)
    {
        $listing = array_filter(array_map([$this, 'addPathInfo'], $listing), [$this, 'isEntryOutOfScope']);

        return $this->sortListing(array_values($listing));
    }

    

    /**
     * Determine if the entry is out of scope.
     *
     * @param array $entry
     *
     * @return bool
     */
    

    /**
     * Check if the entry resides within the parent directory.
     *
     * @param array $entry
     *
     * @return bool
     */
    

    /**
     * Check if the entry is a direct child of the directory.
     *
     * @param array $entry
     *
     * @return bool
     */
    

    /**
     * @param array $listing
     *
     * @return array
     */
    
}
