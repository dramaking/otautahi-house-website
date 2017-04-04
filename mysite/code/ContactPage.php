<?php

class ContactPage extends Page {

  private static $db = array (
    'Heading' => 'Text'
  );

  private static $has_one = array (
    'Photo' => 'Image'
  );


  public function getCMSFields() {
    $fields = parent::getCMSFields();

    $fields->addFieldToTab('Root.Main', TextField::create('Heading', 'Main Heading'), 'Content');

    $fields->addFieldToTab('Root.HeadingPhoto', $photo = UploadField::create('Photo'));

    $photo->getValidator()->setAllowedExtensions(array('png', 'gif', 'jpg', 'jpeg'));
    $photo->setFolderName('Contact-photos');

    return $fields;
  }
}

class ContactPage_Controller extends Page_Controller {

}