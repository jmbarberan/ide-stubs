<?php

namespace Phalcon\Logger\Adapter;

/**
 * Phalcon\Logger\AdapterInterface
 *
 * Interface for Phalcon\Logger adapters
 */
interface AdapterInterface
{

    /**
     * Adds a message in the queue
     *
     * @param \Phalcon\Logger\Item $item
     */
    public function add(\Phalcon\Logger\Item $item);

    /**
     * Starts a transaction
     *
     * @return AdapterInterface
     */
    public function begin(): AdapterInterface;

    /**
     * Closes the logger
     *
     * @return bool
     */
    public function close(): bool;

    /**
     * Commits the internal transaction
     *
     * @return AdapterInterface
     */
    public function commit(): AdapterInterface;

    /**
     * Returns the internal formatter
     *
     * @return \Phalcon\Logger\Formatter\FormatterInterface
     */
    public function getFormatter(): FormatterInterface;

    /**
     * Processes the message in the adapter
     *
     * @param \Phalcon\Logger\Item $item
     */
    public function process(\Phalcon\Logger\Item $item);

    /**
     * Rollbacks the internal transaction
     *
     * @return AdapterInterface
     */
    public function rollback(): AdapterInterface;

    /**
     * Sets the message formatter
     *
     * @param \Phalcon\Logger\Formatter\FormatterInterface $formatter
     * @return AdapterInterface
     */
    public function setFormatter(\Phalcon\Logger\Formatter\FormatterInterface $formatter): AdapterInterface;

}