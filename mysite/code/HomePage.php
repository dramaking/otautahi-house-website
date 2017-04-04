<?php

class HomePage extends Page {

  private static $db = array (
    'Heading' => 'Text',
    'Teaser' => 'Text',

  );

  private static $has_one = array (
    'Photo' => 'Image'
  );

  private static $has_many = array (
    'Features' => 'Feature',
    'GuideBooks' => 'GuideBook'
  );

  public function getCMSFields() {
    $fields = parent::getCMSFields();

    $fields->addFieldToTab('Root.Main', TextField::create('Heading', 'Main Heading'), 'Content');

    $fields->addFieldToTab('Root.Main', TextareaField::create('Teaser'), 'Content');

    $fields->addFieldToTab('Root.HeadingPhoto', $photo = UploadField::create('Photo'));

    $photo->getValidator()->setAllowedExtensions(array('png', 'gif', 'jpg', 'jpeg'));
    $photo->setFolderName('homepage-photos');

    $fields->addFieldsToTab('Root.Features', GridField::create(
      'Features',
      'Features on this page', 
      $this->Features(),
      GridFieldConfig_RecordEditor::create()
    ));

    $fields->addFieldsToTab('Root.GuideBooks', GridField::create(
      'GuideBooks',
      'Guide books on this page', 
      $this->GuideBooks(),
      GridFieldConfig_RecordEditor::create()
    ));

    return $fields;
  }
  
}

class HomePage_Controller extends Page_Controller {
  
}