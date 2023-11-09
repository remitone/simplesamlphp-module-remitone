<?php

declare(strict_types=1);

namespace SimpleSAML\Module\remitone\Auth\Process;

use SimpleSAML\Assert\Assert;
use SimpleSAML\Auth;
use SimpleSAML\Error;

/**
 * Filter to modify attributes using regular expressions
 *
 * This filter can modify or replace attributes given a regular expression.
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
     * @throws \SimpleSAML\Error\Exception In case of invalid configuration.
     */
    public function process(array &$state): void
    {
        Assert::keyExists($state, 'Attributes');

        // get attributes from request
        $attributes = &$state['Attributes'];

        var_dump($attributes); die();
        // check that all required params are set in config
//        if (empty($this->pattern) || empty($this->subject)) {
//            throw new Error\Exception("Not all params set in config.");
//        }

//        if (!$this->replace && !$this->remove && $this->replacement === false) {
//            throw new Error\Exception(
//                "'replacement' must be set if neither '%replace' nor " . "'%remove' are set."
//            );
//        }
//
//        if (!$this->replace && $this->replacement === null) {
//            throw new Error\Exception("'%replace' must be set if 'replacement' is null.");
//        }
//
//        if ($this->replace && $this->remove) {
//            throw new Error\Exception("'%replace' and '%remove' cannot be used together.");
//        }
//
//        if (empty($this->target)) {
//            // use subject as target if target is not set
//            $this->target = $this->subject;
//        }
//
//        if ($this->subject !== $this->target && $this->remove) {
//            throw new Error\Exception("Cannot use '%remove' when 'target' is different than 'subject'.");
//        }
//
//        if (!array_key_exists($this->subject, $attributes)) {
//            // if no such subject, stop gracefully
//            return;
//        }
//
//        if ($this->replace) {
//            // replace the whole value
//            foreach ($attributes[$this->subject] as &$value) {
//                $matches = [];
//                if (preg_match($this->pattern, $value, $matches) > 0) {
//                    $new_value = $matches[0];
//
//                    if (is_string($this->replacement)) {
//                        $new_value = $this->replacement;
//                    }
//
//                    if ($this->subject === $this->target) {
//                        $value = $new_value;
//                    } elseif ($this->merge === true) {
//                        $attributes[$this->target] = array_values(
//                            array_diff($attributes[$this->target], [$value])
//                        );
//                        $attributes[$this->target][] = $new_value;
//                    } else {
//                        $attributes[$this->target] = [$new_value];
//                    }
//                }
//            }
//        } elseif ($this->remove) {
//            // remove the whole value
//            $removedAttrs = [];
//            foreach ($attributes[$this->subject] as $value) {
//                $matches = [];
//                if (preg_match($this->pattern, $value, $matches) > 0) {
//                    $removedAttrs[] = $value;
//                }
//            }
//            $attributes[$this->target] = array_diff($attributes[$this->subject], $removedAttrs);
//
//            if (empty($attributes[$this->target])) {
//                unset($attributes[$this->target]);
//            }
//        } else {
//            // replace only the part that matches
//            if ($this->subject === $this->target) {
//                $attributes[$this->target] = preg_replace(
//                    $this->pattern,
//                    $this->replacement,
//                    $attributes[$this->subject]
//                );
//            } else {
//                $diff = array_diff(
//                    preg_replace(
//                        $this->pattern,
//                        $this->replacement,
//                        $attributes[$this->subject]
//                    ),
//                    $attributes[$this->subject]
//                );
//
//                if ($this->merge === true) {
//                    /** @psalm-suppress InvalidArgument */
//                    $attributes[$this->target] = array_merge($diff, $attributes[$this->target] ?? []);
//                } else {
//                    /** @psalm-suppress InvalidArgument */
//                    $attributes[$this->target] = $diff;
//                }
//            }
//        }
    }
}
