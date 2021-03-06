<?php

namespace StudyDrSlump\Protobuf\Codec;

use StudyDrSlump\Protobuf;

/**
 * This codec serializes to Protobuf's TextFormat, unserialization
 * is not supported.
 *
 */
class TextFormat implements Protobuf\CodecInterface
{
    /**
     * @param \StudyDrSlump\Protobuf\Message $message
     * @return string
     */
    public function encode(Protobuf\Message $message)
    {
        return $this->encodeMessage($message);
    }

    /**
     *
     * @throw \StudyDrSlump\Protobuf\Exception - Decoding is not supported
     * @param \StudyDrSlump\Protobuf\Message $message
     * @param String $data
     * @return \StudyDrSlump\Protobuf\Message
     */
    public function decode(Protobuf\Message $message, $data)
    {
        throw new \BadMethodCallException('TextFormat codec does not support decoding');
    }

    protected function encodeMessage(Protobuf\Message $message, $level = 0)
    {
        $descriptor = Protobuf::getRegistry()->getDescriptor($message);

        $indent = str_repeat('  ', $level);
        $data = '';
        foreach ($descriptor->getFields() as $tag=>$field) {

            $empty = !$message->_has($tag);
            if ($field->isRequired() && $empty) {
                throw new \UnexpectedValueException(
                    'Message ' . get_class($message) . '\'s field tag ' . $tag . '(' . $field->getName() . ') is required but has no value'
                );
            }

            if ($empty) {
                continue;
            }

            $name = $field->getName();
            $value = $message->_get($tag);

            if ($field->isRepeated()) {
                foreach ($value as $val) {
                    // Skip nullified repeated values
                    if (NULL === $val) {
                        continue;
                    } else if ($field->getType() !== Protobuf::TYPE_MESSAGE) {
                        $data .= $indent . $name . ': ' . json_encode($val) . "\n";
                    } else {
                        $data .= $indent . $name . " {\n";
                        $data .= $this->encodeMessage($val, $level+1);
                        $data .= $indent . "}\n";
                    }
                }
            } else {
                if ($field->getType() === Protobuf::TYPE_MESSAGE) {
                    $data .= $indent . $name . " {\n";
                    $data .= $this->encodeMessage($value, $level+1);
                    $data .= $indent . "}\n";
                } else {
                    $data .= $indent . $name . ': ' . json_encode($value) . "\n";
                }
            }
        }

        return $data;
    }
}

