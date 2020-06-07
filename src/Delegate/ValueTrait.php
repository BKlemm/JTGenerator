<?php
/**
 * This file is part of JTGenerator
 *
 * (c) Bjoern Klemm <webinnovativ@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JTGenerator\Delegate;


/**
 * Trait ValueTrait
 *
 * @package JTGenerator\Delegate
 */
trait ValueTrait
{
    /** @var mixed */
    private $value;

    private bool $quoted = true;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasValue(): bool
    {
        return $this->value !== null;
    }

    /**
     * @param bool $state
     *
     * @return $this
     */
    public function disableQuote(bool $state = false): self
    {
        $this->quoted = $state;

        return $this;
    }

    /**
     * @return bool
     */
    public function isQuoted(): bool
    {
        return $this->quoted;
    }
}
