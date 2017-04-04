<?php 

class Price extends DataObject {

  private static $db = array (
    'Title' => 'Varchar',
    'Expense' => 'Varchar'
  );

  private static $has_one = array (
    'AboutApartment' => 'AboutApartment'
  );

  

  // private static $summary_fields = array (
  //   // 'FeaturePhoto.CMSThumbnail' => '',
  //   'FeatureHeading' => 'Title of feature',
  //   'FeatureDescription' => 'Short description',
  // );

  public function getCMSFields() {
    $fields = FieldList::create(
      TextField::create('Title', 'Expense Title'),
      TextField::create('Expense', 'Expense Description')
    );

    return $fields;
  }
}