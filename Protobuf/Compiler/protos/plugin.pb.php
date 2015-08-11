<?php
// DO NOT EDIT! Generated by Protobuf for PHP protoc plugin @package_version@
// Source: plugin.proto
//   Date: 2011-03-20 01:27:33

namespace google\protobuf\compiler {

  class CodeGeneratorRequest extends \StudyDrSlump\Protobuf\Message {

    /** @var \StudyDrSlump\Protobuf\Descriptor */
    protected static $__descriptor;
    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor(\StudyDrSlump\Protobuf\Descriptor $descriptor = NULL)
    {
      if (NULL !== $descriptor) {
        self::$__descriptor = $descriptor;
        return self::$__descriptor;
      }

      if (!self::$__descriptor) {
        $descriptor = new \StudyDrSlump\Protobuf\Descriptor("\google\protobuf\compiler\CodeGeneratorRequest");

        // repeated  file_to_generate = 1
        $f = new \StudyDrSlump\Protobuf\Field();
        $f->number    = 1;
        $f->name      = "file_to_generate";
        $f->type      = 9;
        $f->rule      = 3;
        $descriptor->addField($f);

        // optional  parameter = 2
        $f = new \StudyDrSlump\Protobuf\Field();
        $f->number    = 2;
        $f->name      = "parameter";
        $f->nameOrig  = "parameter";
        $f->type      = 9;
        $f->rule      = 1;
        $descriptor->addField($f);

        // repeated .google.protobuf.FileDescriptorProto proto_file = 15
        $f = new \StudyDrSlump\Protobuf\Field();
        $f->number    = 15;
        $f->name      = "proto_file";
        $f->type      = 11;
        $f->rule      = 3;
        $f->reference = "\google\protobuf\FileDescriptorProto";
        $descriptor->addField($f);

        foreach (self::$__extensions as $cb) {
          $descriptor->addField($cb(), true);
        }

        self::$__descriptor = $descriptor;
      }

      return self::$__descriptor;
    }

    /** @var string[] */
    public $file_to_generate = array();
    
    /** @var string */
    public $parameter = null;
    
    /** @var \google\protobuf\FileDescriptorProto[] */
    public $proto_file = array();
    

    /**
     * Check if <file_to_generate> has a value
     *
     * @return boolean
     */
    public function hasFileToGenerate(){
      return $this->_has(1);
    }
    
    /**
     * Clear <file_to_generate> value
     *
     * @return \google\protobuf\compiler\CodeGeneratorRequest
     */
    public function clearFileToGenerate(){
      return $this->_clear(1);
    }
    
    /**
     * Get <file_to_generate> value
     *
     * @param int $idx
     * @return string
     */
    public function getFileToGenerate($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <file_to_generate> value
     *
     * @param string $value
     * @return \google\protobuf\compiler\CodeGeneratorRequest
     */
    public function setFileToGenerate( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <file_to_generate>
     *
     * @return string[]
     */
    public function getFileToGenerateList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <file_to_generate>
     *
     * @param string $value
     * @return \google\protobuf\compiler\CodeGeneratorRequest
     */
    public function addFileToGenerate( $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <parameter> has a value
     *
     * @return boolean
     */
    public function hasParameter(){
      return $this->_has(2);
    }
    
    /**
     * Clear <parameter> value
     *
     * @return \google\protobuf\compiler\CodeGeneratorRequest
     */
    public function clearParameter(){
      return $this->_clear(2);
    }
    
    /**
     * Get <parameter> value
     *
     * @return string
     */
    public function getParameter(){
      return $this->_get(2);
    }
    
    /**
     * Set <parameter> value
     *
     * @param string $value
     * @return \google\protobuf\compiler\CodeGeneratorRequest
     */
    public function setParameter( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <proto_file> has a value
     *
     * @return boolean
     */
    public function hasProtoFile(){
      return $this->_has(15);
    }
    
    /**
     * Clear <proto_file> value
     *
     * @return \google\protobuf\compiler\CodeGeneratorRequest
     */
    public function clearProtoFile(){
      return $this->_clear(15);
    }
    
    /**
     * Get <proto_file> value
     *
     * @param int $idx
     * @return \google\protobuf\FileDescriptorProto
     */
    public function getProtoFile($idx = NULL){
      return $this->_get(15, $idx);
    }
    
    /**
     * Set <proto_file> value
     *
     * @param \google\protobuf\FileDescriptorProto $value
     * @return \google\protobuf\compiler\CodeGeneratorRequest
     */
    public function setProtoFile(\google\protobuf\FileDescriptorProto $value, $idx = NULL){
      return $this->_set(15, $value, $idx);
    }
    
    /**
     * Get all elements of <proto_file>
     *
     * @return \google\protobuf\FileDescriptorProto[]
     */
    public function getProtoFileList(){
     return $this->_get(15);
    }
    
    /**
     * Add a new element to <proto_file>
     *
     * @param \google\protobuf\FileDescriptorProto $value
     * @return \google\protobuf\compiler\CodeGeneratorRequest
     */
    public function addProtoFile(\google\protobuf\FileDescriptorProto $value){
     return $this->_add(15, $value);
    }
    
  }
}

namespace google\protobuf\compiler {

  class CodeGeneratorResponse extends \StudyDrSlump\Protobuf\Message {

    /** @var \StudyDrSlump\Protobuf\Descriptor */
    protected static $__descriptor;
    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor(\StudyDrSlump\Protobuf\Descriptor $descriptor = NULL)
    {
      if (NULL !== $descriptor) {
        self::$__descriptor = $descriptor;
        return self::$__descriptor;
      }

      if (!self::$__descriptor) {
        $descriptor = new \StudyDrSlump\Protobuf\Descriptor("\google\protobuf\compiler\CodeGeneratorResponse");

        // optional  error = 1
        $f = new \StudyDrSlump\Protobuf\Field();
        $f->number    = 1;
        $f->name      = "error";
        $f->nameOrig  = "error";
        $f->type      = 9;
        $f->rule      = 1;
        $descriptor->addField($f);

        // repeated .google.protobuf.compiler.CodeGeneratorResponse.File file = 15
        $f = new \StudyDrSlump\Protobuf\Field();
        $f->number    = 15;
        $f->name      = "file";
        $f->nameOrig  = "file";
        $f->type      = 11;
        $f->rule      = 3;
        $f->reference = "\google\protobuf\compiler\CodeGeneratorResponse\File";
        $descriptor->addField($f);

        foreach (self::$__extensions as $cb) {
          $descriptor->addField($cb(), true);
        }

        self::$__descriptor = $descriptor;
      }

      return self::$__descriptor;
    }

    /** @var string */
    public $error = null;
    
    /** @var \google\protobuf\compiler\CodeGeneratorResponse\File[] */
    public $file = array();
    

    /**
     * Check if <error> has a value
     *
     * @return boolean
     */
    public function hasError(){
      return $this->_has(1);
    }
    
    /**
     * Clear <error> value
     *
     * @return \google\protobuf\compiler\CodeGeneratorResponse
     */
    public function clearError(){
      return $this->_clear(1);
    }
    
    /**
     * Get <error> value
     *
     * @return string
     */
    public function getError(){
      return $this->_get(1);
    }
    
    /**
     * Set <error> value
     *
     * @param string $value
     * @return \google\protobuf\compiler\CodeGeneratorResponse
     */
    public function setError( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <file> has a value
     *
     * @return boolean
     */
    public function hasFile(){
      return $this->_has(15);
    }
    
    /**
     * Clear <file> value
     *
     * @return \google\protobuf\compiler\CodeGeneratorResponse
     */
    public function clearFile(){
      return $this->_clear(15);
    }
    
    /**
     * Get <file> value
     *
     * @param int $idx
     * @return \google\protobuf\compiler\CodeGeneratorResponse\File
     */
    public function getFile($idx = NULL){
      return $this->_get(15, $idx);
    }
    
    /**
     * Set <file> value
     *
     * @param \google\protobuf\compiler\CodeGeneratorResponse\File $value
     * @return \google\protobuf\compiler\CodeGeneratorResponse
     */
    public function setFile(\google\protobuf\compiler\CodeGeneratorResponse\File $value, $idx = NULL){
      return $this->_set(15, $value, $idx);
    }
    
    /**
     * Get all elements of <file>
     *
     * @return \google\protobuf\compiler\CodeGeneratorResponse\File[]
     */
    public function getFileList(){
     return $this->_get(15);
    }
    
    /**
     * Add a new element to <file>
     *
     * @param \google\protobuf\compiler\CodeGeneratorResponse\File $value
     * @return \google\protobuf\compiler\CodeGeneratorResponse
     */
    public function addFile(\google\protobuf\compiler\CodeGeneratorResponse\File $value){
     return $this->_add(15, $value);
    }
    
  }
}

namespace google\protobuf\compiler\CodeGeneratorResponse {

  class File extends \StudyDrSlump\Protobuf\Message {

    /** @var \StudyDrSlump\Protobuf\Descriptor */
    protected static $__descriptor;
    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor(\StudyDrSlump\Protobuf\Descriptor $descriptor = NULL)
    {
      if (NULL !== $descriptor) {
        self::$__descriptor = $descriptor;
        return self::$__descriptor;
      }

      if (!self::$__descriptor) {
        $descriptor = new \StudyDrSlump\Protobuf\Descriptor("\google\protobuf\compiler\CodeGeneratorResponse\File");

        // optional  name = 1
        $f = new \StudyDrSlump\Protobuf\Field();
        $f->number    = 1;
        $f->name      = "name";
        $f->nameOrig  = "name";
        $f->type      = 9;
        $f->rule      = 1;
        $descriptor->addField($f);

        // optional  insertion_point = 2
        $f = new \StudyDrSlump\Protobuf\Field();
        $f->number    = 2;
        $f->name      = "insertion_point";
        $f->type      = 9;
        $f->rule      = 1;
        $descriptor->addField($f);

        // optional  content = 15
        $f = new \StudyDrSlump\Protobuf\Field();
        $f->number    = 15;
        $f->name      = "content";
        $f->nameOrig  = "content";
        $f->type      = 9;
        $f->rule      = 1;
        $descriptor->addField($f);

        foreach (self::$__extensions as $cb) {
          $descriptor->addField($cb(), true);
        }

        self::$__descriptor = $descriptor;
      }

      return self::$__descriptor;
    }

    /** @var string */
    public $name = null;
    
    /** @var string */
    public $insertion_point = null;
    
    /** @var string */
    public $content = null;
    

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \google\protobuf\compiler\CodeGeneratorResponse\File
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \google\protobuf\compiler\CodeGeneratorResponse\File
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <insertion_point> has a value
     *
     * @return boolean
     */
    public function hasInsertionPoint(){
      return $this->_has(2);
    }
    
    /**
     * Clear <insertion_point> value
     *
     * @return \google\protobuf\compiler\CodeGeneratorResponse\File
     */
    public function clearInsertionPoint(){
      return $this->_clear(2);
    }
    
    /**
     * Get <insertion_point> value
     *
     * @return string
     */
    public function getInsertionPoint(){
      return $this->_get(2);
    }
    
    /**
     * Set <insertion_point> value
     *
     * @param string $value
     * @return \google\protobuf\compiler\CodeGeneratorResponse\File
     */
    public function setInsertionPoint( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <content> has a value
     *
     * @return boolean
     */
    public function hasContent(){
      return $this->_has(15);
    }
    
    /**
     * Clear <content> value
     *
     * @return \google\protobuf\compiler\CodeGeneratorResponse\File
     */
    public function clearContent(){
      return $this->_clear(15);
    }
    
    /**
     * Get <content> value
     *
     * @return string
     */
    public function getContent(){
      return $this->_get(15);
    }
    
    /**
     * Set <content> value
     *
     * @param string $value
     * @return \google\protobuf\compiler\CodeGeneratorResponse\File
     */
    public function setContent( $value){
      return $this->_set(15, $value);
    }
    
  }
}
