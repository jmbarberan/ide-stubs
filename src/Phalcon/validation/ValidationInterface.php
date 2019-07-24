<?php

namespace Phalcon\Validation;

/**
 * Interface for the Phalcon\Validation component
 */
interface ValidationInterface
{

    /**
     * Adds a validator to a field
     *
     * @param string $field
     * @param \Phalcon\Validation\ValidatorInterface $validator
     * @return ValidationInterface
     */
    public function add(string $field, \Phalcon\Validation\ValidatorInterface $validator): ValidationInterface;

    /**
     * Appends a message to the messages list
     *
     * @param \Phalcon\Messages\MessageInterface $message
     * @return ValidationInterface
     */
    public function appendMessage(\Phalcon\Messages\MessageInterface $message): ValidationInterface;

    /**
     * Assigns the data to an entity
     * The entity is used to obtain the validation values
     *
     * @param object $entity
     * @param array|object $data
     * @return ValidationInterface
     */
    public function bind($entity, $data): ValidationInterface;

    /**
     * Returns the bound entity
     *
     * @return object
     */
    public function getEntity();

    /**
     * Returns all the filters or a specific one
     *
     * @param string $field
     * @return mixed|null
     */
    public function getFilters(string $field = null): ?;

    /**
     * Get label for field
     *
     * @param string $field
     * @return string
     */
    public function getLabel(string $field): string;

    /**
     * Returns the registered validators
     *
     * @return \Phalcon\Messages\Messages
     */
    public function getMessages(): Messages;

    /**
     * Returns the validators added to the validation
     *
     * @return array
     */
    public function getValidators(): array;

    /**
     * Gets the a value to validate in the array/object data source
     *
     * @param string $field
     * @return mixed|null
     */
    public function getValue(string $field): ?;

    /**
     * Alias of `add` method
     *
     * @param string $field
     * @param \Phalcon\Validation\ValidatorInterface $validator
     * @return ValidationInterface
     */
    public function rule(string $field, \Phalcon\Validation\ValidatorInterface $validator): ValidationInterface;

    /**
     * Adds the validators to a field
     *
     * @param string $field
     * @param array $validators
     * @return ValidationInterface
     */
    public function rules(string $field, array $validators): ValidationInterface;

    /**
     * Adds filters to the field
     *
     * @param string $field
     * @param array|string $filters
     * @return ValidationInterface
     */
    public function setFilters(string $field, $filters): ValidationInterface;

    /**
     * Adds labels for fields
     *
     * @param array $labels
     */
    public function setLabels(array $labels);

    /**
     * Validate a set of data according to a set of rules
     *
     * @param array|object $data
     * @param object $entity
     * @return \Phalcon\Messages\Messages
     */
    public function validate($data = null, $entity = null): Messages;

}