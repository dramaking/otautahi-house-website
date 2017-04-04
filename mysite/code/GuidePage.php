<?php

class GuidePage extends Page {

  private static $db = array (
    'Heading' => 'Text',
    'ButtonText' => 'Text'
  );

  private static $has_one = array (
    'Photo' => 'Image'
  );

  private static $has_many = array (
    'GuideItems' => 'GuideItem'
  );

  public function getCMSFields() {
    $fields = parent::getCMSFields();

    $fields->addFieldToTab('Root.Main', TextField::create('Heading', 'Main Heading'), 'Content');

    $fields->addFieldToTab('Root.Main', TextField::create('ButtonText', 'Button Text'), 'Content');

    $fields->addFieldToTab('Root.HeadingPhoto', $photo = UploadField::create('Photo'));

    $photo->getValidator()->setAllowedExtensions(array('png', 'gif', 'jpg', 'jpeg'));
    $photo->setFolderName('Guide-photos');

    $fields->addFieldToTab('Root.GuideItems', GridField::create(
      'GuideItems', 
      'Guide Contents',
      $this->GuideItems(), 
      GridFieldConfig_RecordEditor::create()
    ));

    return $fields;
  }
}

class GuidePage_Controller extends Page_Controller {

}