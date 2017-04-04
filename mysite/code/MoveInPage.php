<?php

class MoveInPage extends Page {

  private static $db = array (
    'Heading' => 'Text',
    'ButtonText' => 'Text'
  );

  private static $has_one = array (
    'Photo' => 'Image'
  );

  private static $has_many = array (
    'Icons' => 'Icon',
    'NotToBringItems' => 'NotToBringItem',
    'BringItems' => 'BringItem',
    'Sections' => 'Section'
  );

  public function getCMSFields() {
    $fields = parent::getCMSFields();

    $fields->addFieldToTab('Root.Main', TextField::create('Heading', 'Main Heading'), 'Content');

    $fields->addFieldToTab('Root.Main', TextField::create('ButtonText', 'Button Text'), 'Content');

    $fields->addFieldToTab('Root.HeadingPhoto', $photo = UploadField::create('Photo'));

    $photo->getValidator()->setAllowedExtensions(array('png', 'gif', 'jpg', 'jpeg'));
    $photo->setFolderName('MoveIn-photos');

    $fields->addFieldToTab('Root.Icons', GridField::create(
      'Icons', 
      'Icons List',
      $this->Icons(), 
      GridFieldConfig_RecordEditor::create()
    ));

    $fields->addFieldToTab('Root.BringItem', GridField::create(
      'BringItems', 
      'Bring Items',
      $this->BringItems(), 
      GridFieldConfig_RecordEditor::create()
    ));

    $fields->addFieldToTab('Root.NotToBringItem', GridField::create(
      'NotToBringItems', 
      'Not To Bring Items',
      $this->NotToBringItems(), 
      GridFieldConfig_RecordEditor::create()
    ));

    $fields->addFieldToTab('Root.Section', GridField::create(
      'Sections', 
      'Section',
      $this->Sections(), 
      GridFieldConfig_RecordEditor::create()
    ));

    return $fields;
  }
}

class MoveInPage_Controller extends Page_Controller {

}