<?php 

class Icon extends DataObject {

  private static $db = array (
    'FontAwesomeIcon' => 'Varchar',
    'Title' => 'Varchar'
  );

  private static $has_one = array (
    'BookingPage' => 'BookingPage',
    'MoveInPage' => 'MoveInPage'
  );

  private static $belongs_many_many = array (
    'Options' => 'Option',
    'AboutApartments' => 'AboutApartment',
    'NotToBringItems' => 'NotToBringItem'

  );

  // private static $summary_fields = array (
  //   // 'FeaturePhoto.CMSThumbnail' => '',
  //   'FeatureHeading' => 'Title of feature',
  //   'FeatureDescription' => 'Short description',
  // );

  public function getCMSFields() {
    $fields = FieldList::create(
      FontAwesomeIconPickerField::create('FontAwesomeIcon', 'Icon'),
      TextField::create('Title', 'Icon Title')
    );

    return $fields;
  }
}