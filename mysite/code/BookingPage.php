<?php

class BookingPage extends Page {

  private static $db = array (
    'Heading' => 'Text',
    'Teaser' => 'Text',

  );

  private static $has_one = array (
    'Brochure' => 'File',
    'Photo' => 'Image'
  );

  private static $has_many = array (
    'Icons' => 'Icon',
    'Options' => 'Option',
    'AboutApartments' => 'AboutApartment',
    'Steps' => 'Step'
  );

  // public function BookingPage() {
  //   return UserDefinedForm::get()->filter('ParentID', '0')->first();
  // }

  public function getCMSFields() {
    $fields = parent::getCMSFields();

    $fields->addFieldToTab('Root.Main', TextField::create('Heading', 'Main Heading'), 'Content');

    $fields->addFieldToTab('Root.Main', TextareaField::create('Teaser'), 'Content');

    $fields->addFieldToTab('Root.HeadingPhoto', $photo = UploadField::create('Photo'));

    $photo->getValidator()->setAllowedExtensions(array('png', 'gif', 'jpg', 'jpeg'));
    $photo->setFolderName('booking-photos');

    $fields->addFieldToTab('Root.Attachments', $brochure = UploadField::create('Brochure'));

    $brochure->getValidator()->setAllowedExtensions(array('pdf'));
    $brochure->setFolderName('booking-document');

    $fields->addFieldToTab('Root.Icons', GridField::create(
      'Icons', 
      'Icons List',
      $this->Icons(), 
      GridFieldConfig_RecordEditor::create()
    ));

    $fields->addFieldToTab('Root.Options', GridField::create(
      'Options', 
      'Options List',
      $this->Options(), 
      GridFieldConfig_RecordEditor::create()
    ));

    $fields->addFieldToTab('Root.AboutApartments', GridField::create(
      'AboutApartments', 
      'About Apartment',
      $this->AboutApartments(), 
      GridFieldConfig_RecordEditor::create()
    ));

    $fields->addFieldToTab('Root.Steps', GridField::create(
      'Steps', 
      'Steps List',
      $this->Steps(), 
      GridFieldConfig_RecordEditor::create()
    ));



    return $fields;
  }
}

class BookingPage_Controller extends Page_Controller {

}