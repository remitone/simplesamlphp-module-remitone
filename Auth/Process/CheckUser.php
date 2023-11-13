<?php

declare(strict_types=1);

namespace SimpleSAML\Module\remitone\Auth\Process;

use SimpleSAML\Assert\Assert;
use SimpleSAML\Error\Exception;
use SimpleSAML\Logger;

/**
 * Filter to check username attribute present
 *
 * @package SimpleSAMLphp
 */
class CheckUser extends \SimpleSAML\Auth\ProcessingFilter
{
    /**
     * Apply the filter to modify attributes.
     *
     * Modify existing attributes with the configured values.
     *
     * @param array &$state The current request.
     * @throws Exception In case of invalid configuration.
     */
    public function process(array &$state): void
    {
        Assert::keyExists($state, 'Attributes');

        // get attributes from request
        $attributes = &$state['Attributes'];

        if ((empty($attributes['username']))) {
            Logger::debug('Received attributes -> '. implode(', ', $attributes));
            throw new Exception("Required attribute 'username' not found in the attributes");
        }
    }
}
