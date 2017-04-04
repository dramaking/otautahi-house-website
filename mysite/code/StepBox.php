<?php 

class StepBox extends DataObject {

  private static $db = array (
    'FontAwesomeIcon' => 'Varchar',
    'Title' => 'Varchar',
    'Description' => 'Text'
  );

  private static $has_one = array (
    'Step' => 'Step'
  );

  // private static $belongs_many_many = array (
  //   'Options' => 'Option',
  //   'AboutApartments' => 'AboutApartment'
  // );

  // private static $summary_fields = array (
  //   // 'FeaturePhoto.CMSThumbnail' => '',
  //   'FeatureHeading' => 'Title of feature',
  //   'FeatureDescription' => 'Short description',
  // );

  public function getCMSFields() {
    $fields = FieldList::create(
      FontAwesomeIconPickerField::create('FontAwesomeIcon', 'Icon'),
      TextField::create('Title', 'Box title'),
      TextareaField::create('Description', 'Box description')
    );

    return $fields;
  }
}